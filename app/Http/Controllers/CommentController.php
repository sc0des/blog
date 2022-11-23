<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    //add comment to selected post

    public function store(Post $post)
    {
        request()->validate([
            'comment' => 'required|min:15|max:100',
        ]);

        /* Store new created comments*/
        $post->comments()->create([
            'comment' => request()->comment,
            'commented_at' => now(),
            'author_id' => auth()->user()->id,
        ]);

        return back();
    }
}
