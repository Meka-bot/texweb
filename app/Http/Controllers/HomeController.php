<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();
        return view('welcome')->with('posts', $posts);
    }

    public function diario()
    {

        return view('diario');
    }

    public function juan()
    {
        return view('juan');
    }

}
