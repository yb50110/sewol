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

Route::get('/', 'TimelineController@show');

Route::get('/messages', 'MessageController@show');
Route::post('/messages', 'MessageController@store');

Route::get('/sources', 'SourceController@show');
