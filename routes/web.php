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

Route::get('/', 'PagesController@home');

Route::get('/professional', 'PagesController@professional');

Route::get('/amateur', 'PagesController@amateur');

Route::get('/student', 'PagesController@student');

Route::get('/professional', 'ConcertsController@index');
