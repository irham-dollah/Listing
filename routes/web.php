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
Route::get('/About', 'PagesController@about');
Route::get('/home', 'UserChartController@index');
Auth::routes();

// Route::get('Dashboard', 'DashboardController@index');

Route::resource('Item', 'ItemsController');
Route::resource('User', 'UsersController');
Route::resource('Order', 'OrdersController');
Route::resource('Sale', 'SalesController');
Route::resource('Cart', 'CartsController');
Route::resource('OrderCart', 'OrderCartsController');
// Route::resource('Dashboard', 'UserChartController');
Route::get('Dashboard', 'UserChartController@index');
Route::get('/Cart/add/{id}/{quantity}','CartsController@add');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::resource('Item', 'ItemsController');
    Route::resource('User', 'UsersController');
});

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
    //Route::match(['get', 'post'], '/#/', 'PagesController@member');
});

// Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
// {
//     Route::resource('Item', 'ItemsController');
//     Route::resource('User', 'UsersController');
// });