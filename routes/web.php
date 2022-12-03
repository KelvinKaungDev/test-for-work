<?php

use App\ItSolution\ItDateClass;
use App\Providers\Repository\OrderRepository;
use App\Providers\Service\Postcard;
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

Route::get('{any}', function () {
    // dd(OrderRepository::getAllOrders());
    return view('home.index');
})->where('any', '.*');
