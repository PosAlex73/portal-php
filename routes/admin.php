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

    Route::post('user/mass_delete', [UserController::class, 'massDelete'])->name('users.mass_delete');
    Route::post('portfolio/mass_delete', [PortfolioController::class, 'massDelete'])->name('portfolios.mass_delete');
    Route::post('skill/mass_delete', [SkillController::class, 'massDelete'])->name('skills.mass_delete');
    Route::post('thread/mass_delete', [ThreadMessageController::class, 'massDelete'])->name('threads.mass_delete');
    Route::post('category/mass_delete', [CategoryController::class, 'massDelete'])->name('categories.mass_delete');
    Route::post('article/mass_delete', [ArticleController::class, 'massDelete'])->name('articles.mass_delete');

    Route::get('user/{tab}/{user}', [UserController::class, 'tabs'])->name('users.tabs');
    Route::post('user/profile/{user}', [UserProfileController::class, 'profile'])->name('users.profile');
});

