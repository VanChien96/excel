<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(OrderController::class)->prefix('order')->group(function () {
    Route::get('/searchMethod', 'searchMethod')->name('order.searchMethod');
    Route::get('/search', 'search')->name('order.search');
    Route::get('/detail', 'detail')->name('order.detail');
    Route::get('/detail', 'create')->name('order.detail');
});