<?php

use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
});