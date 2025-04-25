<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Gender;
use App\Models\Superheroe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroeController;
use App\Http\Controllers\UniverseAPIController;
use App\Http\Controllers\SuperheroAPIController;
use App\Http\Controllers\GenderAPIController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/upload', [FileController::class, 'upload'])->name('upload');

Route::post('/download/', [FileController::class, 'download'])->name('download');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('genders', GenderController::class);
    Route::resource('universes', UniverseController::class);
    Route::resource('superheroes', SuperheroeController::class);
});

Route::get('/universesAPI', [UniverseAPIController::class, 'index']);
Route::get('/universesAPI/{name}', [UniverseAPIController::class, 'show']);
Route::get('/superheroesAPI', [SuperheroAPIController::class, 'index']);
Route::get('/superheroesAPI/{name}', [SuperheroAPIController::class, 'show']);
Route::get('/gendersAPI', [GenderAPIController::class, 'index']);
Route::get('/gendersAPI/{name}', [GenderAPIController::class, 'show']);

require __DIR__.'/auth.php';
