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

date_default_timezone_set('Asia/Kuala_Lumpur');
Route::get('/', 'PagesController@index');//=auth.login
Route::get('/login', 'PagesController@index');
Route::resource('Listing', 'ListingsController');
Route::resource('User', 'UsersController');
Route::get('Dashboard', 'ListingsController@index');
Auth::routes();



