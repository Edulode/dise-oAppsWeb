<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Gender;
use App\Models\Superheroe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroeController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/genders', [GenderController::class, 'index']);
//Route::get('/universes', [UniverseController::class, 'index']);

Route::resource('genders', GenderController::class);
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroeController::class);