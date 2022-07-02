<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'MainController@index')->name('index');
    Route::name('category.')->prefix('category')->group(function () {
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');

    });

    Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->
            namespace('Admin')->group(function () {
        Route::get('/', IndexController::class)->name('index');
    });
});

Auth::routes([
    'reset' => false,
    'verified' => false,
    'confirmed' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
