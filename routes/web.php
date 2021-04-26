<?php

use App\Http\Controllers\AutoAddressController;
use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');