<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PostsController extends Controller
{
    
    public function index()
    {
        
        return view('blog.index')->with('posts',Post::get());
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        
        $slug = Str::slug($request->title,'-');
        $newImageName = uniqid() . '-' . $slug .'.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        
        $imgpath = '/images/'. $newImageName ; 
        Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug ,
            'image_path'=>$imgpath,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog');
    }

    public function show(string $slug)
    {
        return view('blog.show')->with('post',Post::where('slug',$slug)->first());
    }

    public function edit(string $slug)
    {
        return view('blog.edit')->with('post',Post::where('slug',$slug)->first());;
    }

    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        
        $slug = Str::slug($request->title,'-');
        $newImageName = uniqid() . '-' . $slug .'.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $imgpath = '/images/'. $newImageName ;
        Post::where('slug',$slug)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug ,
            'image_path'=>$imgpath,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog/' . $slug)->with('message','Post Updated successfully');
    }

    public function destroy(string $slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog')->with('message','Post Deleted successfully');
    }
}
