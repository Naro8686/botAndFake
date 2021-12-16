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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::get('/', 'HomeController@index')->name('index');
Route::group(['prefix' => 'settings'], function () {
    Route::get('/', 'SettingController@index')->name('settings');
    Route::post('/', 'SettingController@store')->name('settings.store');
});
Route::group([
    'prefix' => 'tg',
    'as' => "tg."
], function () {
    Route::group(['prefix' => 'commands', 'as' => "commands."], function () {
        Route::get('/', 'Admin\Telegram\CommandsController@index')->name('index');
        Route::post('/{command}', 'Admin\Telegram\CommandsController@handler')->name('handler');
    });
});