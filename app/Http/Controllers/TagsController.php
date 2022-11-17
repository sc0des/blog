<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Request $request) {

        $tags = Tag::all();
        return view('tags', compact('tags'));
        
    }

    public function show(int $id)
    {
        $tag = Tag::find($id);
        return view('tag', compact('tag'));
    }
    
}
