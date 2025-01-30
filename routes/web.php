<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;

Route::get('/', function () {
    return view('welcome');
});

// rotta di tipo get che prende la vista per creare il form di inserimento delle birre
Route::get("/beer/form", [BeerController::class, "beerForm"])->name("beer.form");

// rotta di tipo post per inviare i dati al database per la creazione di un oggetto Beer
Route::post("/beer/store", [BeerController::class, "beerStore"])->name("beer.store");

// rotta di tipo get per il catalogo delle nostre birre
Route::get("/beer/index", [BeerController::class, "beerIndex"])->name("beer.index");


// SONO ARRIVATO AL MINUTO 1:06:43