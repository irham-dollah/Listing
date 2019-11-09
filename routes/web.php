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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>hello</h1>';
});

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'User ID '.$id.' his name is '.$name;
});

Route::get('/', 'PagesController@index');
Route::get('/StockOut', 'PagesController@StockOut');
Route::get('/AnalyzeSale', 'PagesController@AnalyzeSale');
Route::get('/StockIn', 'PagesController@StockIn');
Route::get('/ViewOrder', 'PagesController@ViewOrder');
Route::get('/ViewStock', 'PagesController@ViewStock');
Route::get('/ViewUser', 'PagesController@ViewUser');
Auth::routes();

Route::get('/Dashboard', 'DashboardController@index');

Route::resource('Item', 'ItemsController');
Route::resource('User', 'UsersController');
Route::resource('Order', 'OrdersController');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/adminOnlyPage/', 'PagesController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
    Route::match(['get', 'post'], '/Item/', 'PagesController@member');
});

Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/superadminOnlyPage/', 'PagesController@super_admin');
});