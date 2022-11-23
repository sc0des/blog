<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/', WelcomeController::class)->name('welcome');

// Mails View
Route::resource('mails', \App\Http\Controllers\MaillistController::class);

// Users View
Route::resource('users', \App\Http\Controllers\WritersController::class);

// Blog Posts View
Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::post('posts/{post:id}/comments', [CommentController::class, 'store']);

// Tags View
Route::resource('tags', \App\Http\Controllers\TagsController::class);

require __DIR__.'/auth.php';

// Logged Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //editing profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'isAdmin'])->group(function () {
});
