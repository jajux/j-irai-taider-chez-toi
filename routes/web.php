<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BricolageController;
use App\Http\Controllers\AssistanceController;

// Page accueil
Route::get('/', function () {
    return view('pages.home');
})->name('accueil');

// User page services
Route::get('/services', function (){return view('pages.services');})->middleware(['auth:sanctum', 'verified'])->name('services');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

//User page reservations 
Route::get('/pages/reservations', function (){return view('pages.reservations');})->middleware(['auth:sanctum', 'verified'])->name('reservations');

// réservations Assistance numérique
Route::get('/formulaire_reservation_assistance',[AssistanceController::class,'index'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations');
Route::get('/creer_reservation',[AssistanceController::class,'create'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations');
Route::post('/enregistrer_assistance',[AssistanceController::class,'store'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations'); 

// réservation Bricolage
Route::get('/formulaire_reservation_bricolage',[BricolageController::class,'index'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations');
Route::get('/creer_reservation',[BricolageController::class,'create'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations');
Route::post('/enregistrer_bricolage',[BricolageController::class,'store'])->middleware(['auth:sanctum', 'verified'])->name('creer_reservations'); 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});