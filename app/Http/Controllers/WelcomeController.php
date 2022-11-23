<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = Cache::remember('welcome.users', 200, function () {
            return User::inRandomOrder()->take(3)->get();
        });

        $posts = Cache::remember('welcome.posts', 210, function () {
            return Post::latest()->take(2)->get();
        });


        return view('welcome', compact('posts', 'users'));
    }

}
