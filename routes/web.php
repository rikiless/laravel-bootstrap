<?php

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

Route::get('/', 'HomeController@index');
Route::get('form-values', 'HomeController@values');

Route::post('form', 'HomeController@store');
Route::post('custom-form', 'HomeController@storeCustomForm');

Route::get('resource', function () {
    return ['message' => 'Hello World!', 'count' => 1];
})->middleware('auth:api');
