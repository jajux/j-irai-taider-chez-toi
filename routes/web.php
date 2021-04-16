<?php

use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
