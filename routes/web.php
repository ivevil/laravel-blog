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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/create', 'PostController@create');
Route::post('/create', 'PostController@store');
Route::get('/{post}', 'PostController@show');

Route::get('/game/rolldice', 'GameController@index');
Route::get('/contact/1', 'GameController@contact');
