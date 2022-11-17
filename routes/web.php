<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ======================== PUBLIC ROUTES ==============================

// Welcome View
Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

// Users View
Route::resource('users', \App\Http\Controllers\WritersController::class);

// Blog Posts View
Route::resource('posts', \App\Http\Controllers\PostController::class);

// Tags View
Route::resource('tags', \App\Http\Controllers\TagsController::class);




