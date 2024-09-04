<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;

Route::get('/', WelcomeController::class)->name('welcome');
Route::post('/auth', AuthController::class)->name('auth');
