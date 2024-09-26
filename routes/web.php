<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Registration Routes
Route::get('/register', function () {
    return view('auth.register'); // Create this view for the registration form
})->name('register.form'); // Optional name for easier referencing

Route::post('/register', [AuthController::class, 'register'])->name('register');

// Login Routes
Route::get('/login', function () {
    return view('auth.login'); // Ensure this view exists
})->name('login.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Your other routes...
Route::get('/galeri', function () {
    return view('content.gallery');
});
Route::get('/klien', function () {
    return view('content.klien');
});
Route::get('/event', function(){
    return view('content.event');
});
Route::get('/artikel', function(){
    return view('content.artikel');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('content.profile');
});
Route::get('/visi-misi', function () {
    return view('content.visi-misi');
});
Route::get('/produk', function () {
    return view('content.produk');
});
Route::get('/kontak', function () {
    return view('content.kontak');
});
Route::get('/about-us', function () {
    return view('content.about-us');
});
