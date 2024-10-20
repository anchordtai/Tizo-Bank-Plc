<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

use App\Http\Controllers\AccountOpenController;
// account opening
Route::get('/open-account', [AccountOpenController::class, 'create'])->name('account.open');
Route::post('/open-account', [AccountOpenController::class, 'store'])->name('account.store');
Route::get('/accounts/create', [AccountOpenController::class, 'create'])->name('accounts.create')->middleware('auth');
Route::post('/accounts', [AccountOpenController::class, 'store'])->name('accounts.store')->middleware('auth');
Route::get('/accounts', [AccountOpenController::class, 'index'])->name('accounts.index')->middleware('auth');


// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// About Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Route
Route::get('/services', function () {
    return view('services');
})->name('services');

// Contact Routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Login Route
Route::get('/login', function () {
    return view('login');
})->name('login');

//Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Register Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Home Routes
Route::get('/home', function () {
    return view('home');
})->name('home');

// Authentication Routes
Auth::routes();

// Home Controller Route
Route::get('/home', [HomeController::class, 'index'])->name('home');
