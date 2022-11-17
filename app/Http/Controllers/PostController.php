<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {

        $posts = Post::all();
        return view('posts', compact('posts'));
        
    }

    public function show(int $id)
    {
        $post = Post::find($id);
        return view('post', compact('post'));
    }
}
