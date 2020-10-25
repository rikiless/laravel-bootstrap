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

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('form-values', [HomeController::class, 'values']);

Route::post('form', [HomeController::class, 'store']);
Route::post('custom-form', [HomeController::class, 'storeCustomForm']);

Route::get('resource', function () {
    return ['message' => 'Hello World!', 'count' => 1];
})->middleware('auth:api');

Route::post('test', [HomeController::class, 'storeTest']);
