<?php

use Illuminate\Support\Facades\Route;

// Page accueil
Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});