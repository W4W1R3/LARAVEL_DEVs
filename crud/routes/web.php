<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    $posts = collect(); // empty collection by default

    if (Auth::check()) {
        $posts = Auth::user()->UsersPosts()->latest()->get();
    }

    return view('home', ['posts' => $posts]);
});

// Route to handle user registration via POST   
Route::post('/register', [UserController::class, 'register']);

// Route to handle user logout via POST
Route::post('/logout', [UserController::class, 'logout']);

// Route to handle user login via POST
Route::post('/login', [UserController::class, 'login']);

// Route to handle creating a new post via POST
Route::post('/create_post', [PostController::class, 'create_post']);

Route::get('/edit_post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit_post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete_post/{post}', [PostController::class, 'deletePost']);

