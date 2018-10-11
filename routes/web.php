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

Route::get('/', 'TimelineController@show')->name('timeline');

Route::get('/messages', 'MessageController@show')->name('messages');
Route::post('/messages', 'MessageController@store')->name('messages.store');

Route::get('/sources', 'SourceController@show')->name('sources');
