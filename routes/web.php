<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exchanger;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetch_balance/{id}/{key}/{secret}', [Exchanger::class, 'fetch_balance']);

Route::get('/fetch_free_balance/{id}/{key}/{secret}', [Exchanger::class, 'fetch_free_balance']);

Route::get('/load_markets/{id}/{key}/{secret}', [Exchanger::class, 'load_markets']);
