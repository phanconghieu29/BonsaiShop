<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\category;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index(){
        // $products = DB::select('select * from products');
        $products = Product::paginate(12);    
        return view('products/index', compact('products'));
    }

    public function create(){
        $categories = category::all();
        return view('admin/create_product', compact('categories'));
    }

    public function showDetail($slug)
    {
        $product = Product::where('pro_slug', $slug)->firstOrFail();
        return view('products/product_detail', compact('product'));
    }

    public function category($slug)
    {
        $category = Category::where('cat_slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(12);
        return view('products/index', compact('products', 'category'));
    }

    public function showFormAdmin()
    {
        // $products = DB::select('select products.*, category.cat_name from products, category where products.category_id = category.id ORDER by products.id;')->paginate(10);
        
        $product = new Product();
        $products = $product->getAllProductsAdmin();
        return view('admin/products_management', compact('products'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pro_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'pro_slug' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cat_id' => 'required|exists:category,id',
            'describe' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product = new Product();
        $product->pro_name = $request->input('pro_name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->pro_slug = $request->input('pro_slug');
        $product->image = $imagePath;
        $product->category_id = $request->input('cat_id');
        $product->describe = $request->input('describe');
        $product->save();

        return redirect()->route('products_management')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.edit_product', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pro_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'pro_slug' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cat_id' => 'required|exists:category,id',
            'describe' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
        $product->pro_name = $request->input('pro_name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->pro_slug = $request->input('pro_slug');
        $product->category_id = $request->input('cat_id');
        $product->describe = $request->input('describe');
        $product->save();

        return redirect()->route('products_management')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products_management')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}
