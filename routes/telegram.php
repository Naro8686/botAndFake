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

Route::get('/setwebhook', "BotController@setWebhook")->name('setWebhook');
Route::post(str_replace('telegram','',env("TELEGRAM_WEBHOOK_URL")), "BotController@webhook")->name('webhook');