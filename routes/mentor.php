<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'mentor'])->group(function () {
    Route::resource('mentor', 'MentorController');
});
