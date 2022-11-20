<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        ray('hello');
        $posts = Post::latest()->take(2)->get();
        $users = User::latest()->take(3)->get();

        return view('welcome', compact('posts', 'users'));
    }
}
