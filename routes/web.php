<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('cours', \App\Http\Controllers\CoursController::class);
Route::view('/acces-refuse', 'acces_refuse');
Route::get('/advisor', [\App\Http\Controllers\AdvisorController::class, 'show'])
->middleware('check-age');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/home/{nom}', function ($nom) {
    echo "bonjour " . $nom  ;
})->where('nom', '[A-Za-z]+');
