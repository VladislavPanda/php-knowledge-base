<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('welcome')->middleware('guest')->middleware('cache.prevent');
Route::post('/auth', [AuthController::class, 'login'])->name('auth');

Route::middleware(['auth.internal', 'cache.prevent'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/chapter/{id}', [ChapterController::class, 'index'])->name('chapter.index');
    Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/sub-category/{id}', [SubCategoryController::class, 'index'])->name('subCategory.index');
    Route::get('/question/{id}', [QuestionController::class, 'show'])->name('question.show');
});
