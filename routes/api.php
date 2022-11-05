<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('user', [AuthController::class, 'user']);

    Route::post('logout', [AuthController::class, 'logout']);

    Route::resource('products', ProductController::class);

    Route::get('products/search/{model}', [ProductController::class, 'search']);

});

