<?php

use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\BricolageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;

// Page accueil
Route::get('/', function () {
    return view('pages.home');
})->name('accueil');

// User page services
Route::middleware(['auth:sanctum', 'verified'])->get('/services', function (){
        return view('pages.services');
    })->name('services');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');

//User page reservations 
Route::middleware(['auth:sanctum', 'verified'])->get('/reservations', function () {
     return view('pages.reservations');
})->name('reservations');