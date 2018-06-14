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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicals', 'HomeController@vehicles')->name('vehicles');
Route::get('/hey', function()
{
    return view('hey');
});



Route::group(['middleware'=>['Admin']], function ()
{
    Route::get('/admin', function()
    {
        return view('admin.dashboard');
    });



    Route::resource('/admin/stockist', 'StockistController');
    Route::resource('/admin/sales', 'SalesController');
    Route::resource('/admin/vehicle', 'VehiclesController');

    Route::patch('/admin/vehicle/{id}', 'VehiclesController@update');

    Route::post('/admin/stockist/create', 'StockistController@store');
    Route::post('/admin/vehicle/create', 'VehiclesController@store');
    Route::post('/admin/sales/create', 'SalesController@store');
});

Route::get('/admin-user', 'AdminUserController@index');
