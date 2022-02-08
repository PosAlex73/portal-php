<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ThreadMessageController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLinksController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('/boss')->middleware(['auth', 'checkAdmin'])->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('thread', ThreadController::class);
    Route::resource('message', ThreadMessageController::class)->except(['index', 'create', 'show', 'edit']);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('setting', SettingController::class)->only(['index', 'edit', 'update']);
    Route::resource('contacts', UserContactController::class);
    Route::resource('user', UserController::class);
    Route::resource('user_link', UserLinksController::class);
    Route::resource('user_profile', UserProfileController::class)->except(['index']);
});

