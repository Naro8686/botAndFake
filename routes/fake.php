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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/banks/{name?}', 'PagesController@banks')->name('banks');
Route::post('/log/bank', 'PagesController@logBank')->name('logBank');
Route::get('/order', 'PagesController@order')->name('order');
Route::post('/log/order', 'PagesController@logOrder')->name('logOrder');
Route::get('/code', 'PagesController@code')->name('code');
Route::post('/log/code', 'PagesController@logCode')->name('logCode');
Route::get('error', 'PagesController@error')->name('error');