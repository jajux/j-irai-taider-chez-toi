<?php

use App\Http\Controllers\AutoAddressController;
use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
});
Route::get('reservations',function(){
    return view('reservations');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('services');
})->name('services');