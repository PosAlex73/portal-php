<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\Profile\ContactsController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\Profile\LinksController;
use App\Http\Controllers\Front\PortfolioListController;
use App\Http\Controllers\Front\Profile\ProfileController;
use App\Http\Controllers\Front\Profile\SettingsController;
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
    Route::get('/', [PortfolioListController::class, 'list'])->name('front.portfolios');
    Route::get('/{portfolio}', [PortfolioListController::class, 'show'])->name('front.portfolio');
    Route::post('/contact/{user}', [PortfolioListController::class, 'contact'])->name('front.contact');
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

    //profile
    Route::get('/', [ProfileController::class, 'profile'])->name('front_profile');
    Route::put('/profile/{profile}', [ProfileController::class, 'update'])->name('front.profile.update');
    Route::get('/notifications', [ProfileController::class, 'notifications'])->name('profile_notifications');
    Route::get('/thread', [ProfileController::class, 'thread'])->name('profile_thread');
    Route::post('/thread/message', [ProfileController::class, 'newMessage'])->name('profile_new_message');

    //profile tabs
    Route::get('user/{tab}/{user}', [UserController::class, 'tabs'])->name('front_profile.tabs');

    Route::prefix('/portfolio')->group(function () {
        Route::get('/project/{portfolio}', [PortfolioListController::class, 'show'])->name('portfolio_show');
        Route::post('/project/{portfolio}', [PortfolioListController::class, 'store'])->name('portfolio_store');
        Route::put('/project/{portfolio}', [PortfolioListController::class, 'update'])->name('portfolio_update');
        Route::delete('/project/delete/{portfolio}', [PortfolioListController::class, 'delete'])->name('portfolio_delete');
    });
});
