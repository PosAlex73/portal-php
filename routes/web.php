<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactsController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LinksController;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\SettingsController;
use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
require __DIR__ . '/admin.php';

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'list'])->name('front.users');
    Route::get('/{user}', [UserController::class, 'user'])->name('front.user');
});

Route::prefix('/portfolios')->group(function () {
    Route::get('/', [PortfolioController::class, 'list'])->name('front.portfolios');
    Route::get('/{portfolio}', [PortfolioController::class, 'show'])->name('front.portfolio');
    Route::post('/contact/{user}', [PortfolioController::class, 'contact'])->name('front.contact');

});

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('front.blog');
    Route::get('/article/{article}', [BlogController::class, 'article'])->name('front.article');
});

Route::prefix('/profile')->middleware(['auth'])->group(function() {
    Route::post('/user/{user}', [UserController::class, 'update'])->name('front.user.update');
    Route::post('/user/contacts/{user}', [UserController::class, 'saveContacts'])->name('front.contacts.update');
    Route::post('/user/contacts/{user}', [UserController::class, 'saveContacts'])->name('front.contacts.update');

    //links
    Route::post('/user/{user}/links', [LinksController::class, 'update'])->name('front_links.store');
    Route::delete('/user/links/', [LinksController::class, 'massDelete'])->name('front_links.delete');

    //contacts
    Route::post('/user/contacts/{user}', [ContactsController::class, 'update'])->name('front_contacts.store');
    Route::delete('/user/contacts/', [ContactsController::class, 'massDelete'])->name('front_contacts.delete');

    //settings
    Route::post('/user/{user}/settings', [SettingsController::class, 'update'])->name('front_settings.update');

    Route::get('/', [ProfileController::class, 'profile'])->name('front_profile');
    Route::post('/profile/{profile}', [ProfileController::class, 'update'])->name('profile_update');
    Route::get('/notifications', [ProfileController::class, 'notifications'])->name('profile_notifications');
    Route::get('/thread', [ProfileController::class, 'thread'])->name('profile_thread');
    Route::post('/thread/message', [ProfileController::class, 'newMessage'])->name('profile_new_message');

    //profile tabs
    Route::get('user/{tab}/{user}', [UserController::class, 'tabs'])->name('front_profile.tabs');

    Route::prefix('/portfolio')->group(function () {
        Route::get('/project/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio_show');
        Route::post('/project/{portfolio}', [PortfolioController::class, 'store'])->name('portfolio_store');
        Route::put('/project/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio_update');
        Route::delete('/project/delete/{portfolio}', [PortfolioController::class, 'delete'])->name('portfolio_delete');
    });
});
