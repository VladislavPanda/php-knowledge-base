<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ChapterController;

Route::get('/', WelcomeController::class)->name('welcome')->middleware('guest');
Route::post('/auth', [AuthController::class, 'login'])->name('auth');

Route::middleware(['auth.internal', 'cache.prevent'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/chapter/{id}', [ChapterController::class, 'index'])->name('chapter.show');
});
