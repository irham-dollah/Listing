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
Route::get('/login', 'PagesController@index');
Route::resource('Order', 'OrdersController');
Route::resource('Sale', 'SalesController');
Route::resource('Cart', 'CartsController');
Route::resource('OrderCart', 'OrderCartsController');
Route::get('/home', 'UserChartController@index');
Route::get('Dashboard', 'UserChartController@index');
Route::get('/Cart/add/{id}/{quantity}','CartsController@add');
Auth::routes();

    // Route::middleware('throttle:3,1')->group(function () {
    //     Route::get('/login', 'PagesController@index');
    // });

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::resource('Item', 'ItemsController');
    Route::resource('User', 'UsersController');
});

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('Item', 'ItemsController');
//     Route::resource('User', 'UsersController');
//     Route::resource('Order', 'OrdersController');
//     Route::resource('Sale', 'SalesController');
//     Route::resource('Cart', 'CartsController');
//     Route::resource('OrderCart', 'OrderCartsController');
//     Route::get('/home', 'UserChartController@index');
//     // Route::resource('Dashboard', 'UserChartController');
//     Route::get('Dashboard', 'UserChartController@index');
//     Route::get('/Cart/add/{id}/{quantity}','CartsController@add');
//     Route::get('/Cart/new/{id}/{quantity}','SaleCartsController@add');
//     Auth::routes();
// });
