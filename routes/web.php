<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunnerController;

Route::get('/', function () {
    return view('homePage');
})->name('home');

Route::get('/registrationForm', function () {
    return view('registrationForm');});

Route::post('/register-runner', [RunnerController::class, 'store']);
Route::get('/allRunners', [RunnerController::class, 'index']);
Route::get('/registrations/{id}/edit', [RunnerController::class, 'edit']);
Route::post('/registrations/{id}/update', [RunnerController::class, 'update']);