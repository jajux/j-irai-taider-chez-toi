<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use GuzzleHttp\Promise\Create;

// Page accueil
Route::get('/', function () {
    return view('pages.home');
})->name('accueil');

// User page services
Route::get('/services', function (){return view('pages.services');})->middleware(['auth:sanctum', 'verified'])->name('services');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

//User page reservations 
Route::get('/reservations', function (){return view('pages.reservations');})->middleware(['auth:sanctum', 'verified'])->name('reservations');

Route::get('/reservations', [ReservationController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('reservations');

Route::get('/reservations/formulaire_reservation',[ReservationController::class,'resa'])->middleware(['auth:sanctum', 'verified'])->name('formulaire reservations');

Route::get('/reservations/creer_reservation',[ReservationController::class,'create'])->middleware(['auth:sanctum', 'verified'])->name('formulaire creation reservations');

Route::post('/reservations/enregistrer_reservation',[ReservationController::class,'enregistrer_reservation'])->middleware(['auth:sanctum', 'verified'])->name('enregistrer reservation');