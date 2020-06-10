<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function () {
    $orderan = [
        'makanan' => 'sambal goreng ati', 
        'pedes' => 'tidak pedas',
        'harga' => 6000
    ];
    return view('order', $orderan);
});
