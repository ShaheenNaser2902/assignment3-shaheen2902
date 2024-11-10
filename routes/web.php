<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController; // Ensure you have this controller for managing posts
use Illuminate\Support\Facades\Route;

// Home route - shows the homepage
Route::get('/', [PostController::class, 'index'])->name('homepage');

// About route - shows the about page
Route::get('/about', function () {
    return view('about'); // Ensure you have about.blade.php in resources/views
})->name('about');

// Welcome route - shows the welcome page
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Dashboard route - shows the dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); // Removed middleware

// Profile routes
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Removed middleware
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Removed middleware
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Removed middleware

// Post routes
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Removed middleware

require __DIR__.'/auth.php';