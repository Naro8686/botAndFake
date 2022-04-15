<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'SettingController@index')->name('settings');
        Route::post('/', 'SettingController@store')->name('settings.store');
    });
    Route::group(['prefix' => 'tg', 'as' => "tg."], function () {
        Route::group(['prefix' => 'commands', 'as' => "commands."], function () {
            Route::get('/', 'Admin\Telegram\CommandsController@index')->name('index');
            Route::post('/{command}', 'Admin\Telegram\CommandsController@handler')->name('handler');
        });
    });
});
