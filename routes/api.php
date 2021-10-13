<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/checkout', 'Api\GuestController@checkout');
Route::get('/categories', 'Api\GuestController@categories');
Route::get('/categories/{slug}', 'Api\GuestController@category');
Route::get('/restaurants/{slug}', 'Api\GuestController@restaurant');

Route::get('/payment-token', 'Api\PaymentController@getToken');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
