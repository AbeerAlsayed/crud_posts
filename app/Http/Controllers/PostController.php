<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
//        $post=Post::where('id',$request->id)->first();
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'img'=>'required'
        ]);
        if ($request->img && $request->img->isValid()){
            $file_name=time().'.'.$request->file('img')->getClientOriginalName();
            $path= $request->file('img')->storeAs('images',$file_name,'public');
            $img="/storage/".$path;
//            $post->img=$img;
        }
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'img'=>$img,
        ]);


        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'img'=>'required'
        ]);
        $post = Post::find($id);
        if ($request->img && $request->img->isValid()){
            $file_name=time().'.'.$request->file('img')->getClientOriginalName();
            $path= $request->file('img')->storeAs('images',$file_name,'public');
            $img="/storage/".$path;
            $post->img=$img;
        }
        $post->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
}
