<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Temporary placeholder register route
Route::get('/register', function () {
    return 'Registration page placeholder';
})->name('register');
