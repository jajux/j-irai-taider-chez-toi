<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

// Page accueil
Route::get('/', function () {
    return view('pages.home');
})->name('accueil');

// User page services
Route::middleware(['auth:sanctum', 'verified'])->get('/services', function ()
    {
        return view('pages.services');
    })->name('services');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
// ------------------------------------------
//User page reservations 
Route::middleware(['auth:sanctum', 'verified'])->get('/reservations', function () 
    {
        return view('pages.reservations');
    })->name('reservations');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');
Route::get('/ajouter_le_service/{id}', [ReservationController::class,'ajouter_le_service']);
Route::get('/sauvegarder_reservation', [ReservationController::class, 'sauvegarder_reservation']);

Route::get('show', [ReservationController::class,'show']);