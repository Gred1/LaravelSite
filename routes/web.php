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
use App\Http\Middleware\CheckAge;

Route::get('/', 'AgeController@home')->name('index');
Route::post('/store', 'AgeController@store')->name('store')->middleware(CheckAge::class);
Route::get('/luck', 'AgeController@luck')->name('luck');
