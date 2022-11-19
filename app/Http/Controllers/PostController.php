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

    public function show(int $id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function create(){

        return view('posts.create');
    }

    public function edit($id){

        /* edit created post*/

        $post =Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function store(Request $request){

        /* Store new created post*/
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image'=> null,
            'posted_at' => now(),
            'author_id' => 1,
            'tag_id' => 1,
        ]);

        return redirect()->route('posts.index');
    }

    public function update($id,Request $request){

        /* update and store created post*/

        $post =Post::find($id);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show',$post->id);
    }


}
