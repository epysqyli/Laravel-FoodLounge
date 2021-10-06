<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route autorizzazione
Route::middleware('auth')->namespace('Admin')->name('admin.')->group(function () {
    Route::get("/home", "HomeController@index")->name('home');
    Route::resource('/foods','FoodController');
    Route::resource('/orders','OrderController');
    Route::resource('/types','TypeController');
});


Route::get('/{any}','HomeController@index')->where('any','.*');