<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio.onePage');
});

Route::get('/secondPage', function () {
    return view('Inicio.secondPage');
}); 