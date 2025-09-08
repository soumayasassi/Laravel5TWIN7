<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{nom}', function ($nom) {
    echo "bonjour " . $nom  ;
})->where('nom', '[A-Za-z]+');
