<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () { return view('home');});
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout' , [UserController::class, 'logout']);
Route::post('/login' , [UserController::class, 'login']);

// Blog related Routes
Route::post('/create_post' , [PostController::class, 'create_post']);

