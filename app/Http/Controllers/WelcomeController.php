<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index() {

    //dd('test WelcomeController'); 
    //ray('test ray');

    return view('welcome');
    
   }
}
