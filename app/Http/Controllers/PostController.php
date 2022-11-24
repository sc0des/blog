<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author', 'tags')->orderBy('posted_at', 'DESC')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load('media', 'author', 'tags');

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $tags = Tag::all();

        $cats = [];
        foreach ($tags as $tag) {
            $cats[$tag->id] = $tag->tag;
        }

        return view('posts.create', compact('tags'));
    }

    public function edit($id)
    {
        /* edit created post*/
        $tags = Tag::all();
        $post = Post::find($id);

        $cats = [];
        foreach ($tags as $tag) {
            $cats[$tag->id] = $tag->tag;
        }

        return view('posts.edit', compact('post', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:6|max:255',
            'content' => 'required|min:255|max:850',
            'tag_id' => 'required|integer',
            'featured_image' => ['nullable', 'image', 'file'],
        ]);

        /* Store new created post*/
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'posted_at' => now(),
            'author_id' => auth()->user()->id,
            'tag_id' => $request->tag_id,
        ]);

        if ($request->has('image')) {
            $post->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return redirect()->route('posts.index');
    }

    public function update($id, Request $request)
    {
        /* update and store created post*/

        $post = Post::find($id);

        /* post validation */

        $validated = $request->validate([
            'title' => 'required|min:6|max:255',
            'content' => 'required|min:255|max:850',
            'tag_id' => 'required|integer',
            'featured_image' => ['nullable', 'file', 'image'],
        ]);

        $post->update($validated);

        if ($request->has('image')) {
            $post->media()->first()?->delete();
            $post->addMediaFromRequest('image')->toMediaCollection('image');
        }

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        /* delete post*/

        $post = Post::findOrFail($id)->delete();

        return redirect()->route('posts.index');
    }
}
