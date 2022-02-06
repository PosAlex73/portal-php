<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__ . '/admin.php';

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog_list');
    Route::get('/article/{article}', [BlogController::class, 'article'])->name('blog_article');
});

Route::prefix('/profile')->middleware(['auth'])->group(function() {
    Route::get('/', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile/{profile}', [ProfileController::class, 'update'])->name('profile_update');
    Route::get('/notifications', [ProfileController::class, 'notifications'])->name('profile_notifications');
    Route::get('/thread', [ProfileController::class, 'thread'])->name('profile_thread');
    Route::post('/thread/message', [ProfileController::class, 'newMessage'])->name('profile_new_message');

    Route::prefix('/portfolio')->group(function () {
        Route::get('/', [PortfolioController::class, 'list'])->name('portfolios');
        Route::get('/project/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio_show');
        Route::post('/project/{portfolio}', [PortfolioController::class, 'store'])->name('portfolio_store');
        Route::put('/project/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio_update');
        Route::delete('/project/delete/{portfolio}', [PortfolioController::class, 'delete'])->name('portfolio_delete');

        Route::post('/project/contact/{contact}', [PortfolioController::class, 'contact'])->name('contact');
    });
});
