<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->group(function () {
    Route::get("/home", "HomeController@index")->name('home');
    Route::resource('/foods', 'FoodController');
    Route::resource('/orders', 'OrderController');
    Route::namespace('orders')->get("/statistics", "OrderController@statistics")->name('orders.statistics');
    Route::resource('/types', 'TypeController');
    Route::resource('/users', 'UserController');
});

Route::get('/{any}', 'HomeController@index')->where('any', '.*');
