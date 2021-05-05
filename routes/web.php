<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AutoAddressController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Models\Reservation;

// Page accueil
Route::get('/', function () {
    return view('home');
})->name('accueil');

// User page services
Route::middleware(['auth:sanctum', 'verified'])->get('/services', function (){
        return view('services');
    })->name('services');
    
Route::get('/services', [ProductController::class, 'index'])->name('services');

    
//User page reservations 
Route::middleware(['auth:sanctum', 'verified'])->get('/reservations', function () {
     return view('reservations');
})->name('reservations');