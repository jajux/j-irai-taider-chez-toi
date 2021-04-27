<?php

use App\Http\Controllers\AutoAddressController;
use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
})->name('accueil');

//User page services

Route::middleware(['auth:sanctum', 'verified'])->get('/services', function () {
    return view('services');
})->name('services');

//User page reservations 
Route::middleware(['auth:sanctum', 'verified'])->get('/reservations', function () {
    return view('reservations');
})->name('reservations');