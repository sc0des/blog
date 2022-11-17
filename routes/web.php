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
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);


Route::resource('users', \App\Http\Controllers\WritersController::class);

#Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
#Route::get('/', [\App\Http\Controllers\TagsController::class, 'index']);



