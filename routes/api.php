<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseAPIController;
use App\Http\Controllers\SuperheroAPIController;
use App\Http\Controllers\GenderAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/universesAPI', [UniverseAPIController::class, 'index']);
Route::get('/universesAPI/{name}', [UniverseAPIController::class, 'show']);
Route::get('/superheroesAPI', [SuperheroAPIController::class, 'index']);
Route::get('/superheroesAPI/{name}', [SuperheroAPIController::class, 'show']);
Route::get('/gendersAPI', [GenderAPIController::class, 'index']);
Route::get('/gendersAPI/{name}', [GenderAPIController::class, 'show']);
