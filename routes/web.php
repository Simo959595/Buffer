<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(“/beer/form”, [BeerController::class, “beerForm”])->name(“beer.form”);

// SONO ARRIVATO AL MINUTO 1:06:43