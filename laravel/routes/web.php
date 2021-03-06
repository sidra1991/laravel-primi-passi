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
    $saluto = [
        'saluto' => 'ciao',
        'per' => 'tutti'
    ];
    return view('welcome',$saluto);
});

route::get('/paguno', function () {
    return view('paguno');
})->name('paguno');

route::get('/pagdue', function () {
    return view('pagdue');
})->name('pagdue');
