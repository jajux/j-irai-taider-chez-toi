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
Route::middleware(['auth:sanctum', 'verified'])->get('/services', function (){
        return view('pages.services');})->name('services');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

//User page reservations 
Route::middleware(['auth:sanctum', 'verified'])->get('/reservations', function (){return view('pages.reservations');})->name('reservations');

Route::get('/reservations', [ReservationController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('reservations');

Route::get('/reservations/formulaire_reservation',[ReservationController::class,'resa'])->middleware(['auth:sanctum', 'verified'])->name('reservations');

Route::get('/reservations/formulaire_reservation',[ReservationController::class,'create'])->middleware(['auth:sanctum', 'verified'])->name('reservations');

Route::post('/reservations/enregistrer_reservation',[ReservationController::class,'enregistrer_reservation'])->middleware(['auth:sanctum', 'verified'])->name('reservations');