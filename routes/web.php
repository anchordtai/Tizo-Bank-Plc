<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
// Routes About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route services
Route::get('/services', function () {
    // You can return a view or execute logic here
    return view('services');
})->name('services');

// Routes contact
Route::get('/contact', function () {
    // You can return a view or execute logic here
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// routes login
Route::get('/login', function () {
    // You can return a view or execute logic here
    return view('login');
})->name('login');

// routes register
Route::get('/register', function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    // You can return a view or execute logic here
    return view('register');
})->name('register');

// routes home
Route::get('/home', function () {
    // You can return a view or execute logic here
    return view('home');
})->name('home');
