<?php

namespace App\Http\Controllers;

use App\Models\Tag;


class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::with('posts')->FindOrFail($id);
        return view('tags.show', compact('tag'));
#
    }
}
