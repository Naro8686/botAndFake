<?php

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
});
