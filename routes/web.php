<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registration page (optional)
Route::get('/register', function () {
    // This would show your registration page
    return view('register'); // You'd need to create resources/views/register.blade.php
})->name('register');



Route::get('/register', function () {
    return view('register');
})->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
