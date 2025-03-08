<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/genders', [GenderController::class, 'index']);