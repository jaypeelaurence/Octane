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

Route::get('/', 'MenuController@index');

Route::get('/manage-account', 'AccountController@index');

Route::get('/manage-account/add', 'AccountController@add');

Route::get('/manage-account/edit/{uid}', 'AccountController@edit');

Route::get('/manage-account/delete/{$uid}', 'AccountController@delete');