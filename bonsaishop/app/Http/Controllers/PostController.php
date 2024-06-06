<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(Request $request){
        $data = $request->all();
        if ($request->hasFile('images')) {
            $data['images'] = $imageName = time() . '.' . $request->file('images')->getClientOriginalExtension();
            \Illuminate\Support\Facades\Storage::disk('local')->put('public/'. $imageName, file_get_contents($request->file('images')));
        }
        Post::create($data);
        return redirect(route('posts.index'));
    }
    public function edit($id){
        $post = Post::find($id);
        if($post){
            return view('admin.posts.edit',compact('post'));
        }
        abort('404');
    }
    public function update(Request $request,$id){
        $data = $request->all();
        if($request->hasFile('images')){
            $data['images'] = $imageName = time() . '.' . $request->file('images')->getClientOriginalExtension();
            \Illuminate\Support\Facades\Storage::disk('local')->put('public/'. $imageName, file_get_contents($request->file('images')));
        }else{
            unset($data['images']);
        }
        $post = Post::find($id);
        if($post){
            $post->update($data);
            return redirect(route('posts.index'));
        }
        abort('404');

    }
    public function destroy($id){
        $post = Post::find($id);
        if($post){
            $post->delete($id);
            return redirect(route('posts.index'));
        }
        abort('404');
    }
}
