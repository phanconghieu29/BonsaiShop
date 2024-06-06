<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function showFormAdmin()
    {
        $categories = Category::paginate(3);
        return view('admin/category_management', compact('categories'));
    }

    public function postAddCategory(Request $request){
        $request->validate([
            'cat_name' => 'required',
            'cat_slug' => 'required',
        ], [
            'cat_name.required' => 'Vui lòng nhập tên loại.',
            'cat_slug.required' => 'Vui lòng nhập slug.',
        ]);

        $dataInsert = [
            $request->cat_name,
            $request->cat_slug
        ];

        $cat = new Category();
        $cat->addCategory($dataInsert);

        return redirect()->route('category_management')->with('msg', 'Thêm loại cây mới thành công!');
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);

        if ($category->products()->exists()) {
            return redirect()->route('category_management')->with('error', 'Không thể xóa loại cây này vì có sản phẩm tham chiếu tới.');
        }

        $category->delete();

        return redirect()->route('category_management')->with('msg', 'Xóa loại cây thành công!');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin/edit_category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        // Kiểm tra validation
        $request->validate([
            'cat_name' => 'required',
            'cat_slug' => 'required',
        ], [
            'cat_name.required' => 'Vui lòng nhập tên loại.',
            'cat_slug.required' => 'Vui lòng nhập slug.',
        ]);

        // Tìm loại cây cần cập nhật
        $category = Category::findOrFail($id);
        
        // Cập nhật thông tin loại cây
        $category->update([
            'cat_name' => $request->cat_name,
            'cat_slug' => $request->cat_slug,
        ]);

        return redirect()->route('category_management')->with('msg', 'Cập nhật loại cây thành công!');
    }

}
