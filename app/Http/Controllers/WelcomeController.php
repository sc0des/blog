<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(Request $request) {

    //dd('test WelcomeController'); 
    //ray('test ray');
    
    $posts = Post::all();
    return view('welcome', compact('posts'));
    
   }
}
 