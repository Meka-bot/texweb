<?php

namespace App\Http\Controllers;

use Session;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->author = $request->author;
        $post->date = $request->date;

        $post->save();

        Session::flash('exito','todo bien');

        return redirect()->back();

    }

    public function show(Post $post)
    {
        return view('posts.show');
    }

    public function edit(Post $post)
    {
        return view('posts.edit');
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('good','todo bien');

        return redirect()->back();
    }
}
