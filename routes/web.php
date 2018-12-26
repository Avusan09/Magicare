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
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vehicals', 'HomeController@vehicles')->name('vehicles');






Route::group(['middleware'=>['Admin']], function ()
{
    Route::get('/admin', function()
    {
        return view('admin.dashboard');
    });

    Route::resource('/admin/stockist', 'StockistController');
    Route::resource('/admin/sales', 'SalesController');
    Route::get('/sales/create', function()
    {
        return view('sales.create');
    });
    Route::resource('/admin/vehicle', 'VehiclesController');
    Route::resource('/admin/tax', 'TaxController');
    Route::resource('/admin/inventory', 'InventoryController');


    Route::patch('/admin/vehicle/{id}', 'VehiclesController@update');
    Route::patch('/admin/tax/{id}', 'TaxController@update');





    Route::post('/admin/stockist/create', 'StockistController@store');
    Route::post('/admin/vehicle/create', 'VehiclesController@store');
    Route::post('/admin/sales/create', 'SalesController@store');
    Route::post('/admin/inventory/create', 'InventoryController@store');
    Route::post('/admin/tax/create', 'TaxController@store');
    Route::get('/inventoryproducts', 'InventoryController@product');
    Route::delete('/admin/inventory/destroy/{id}','InventoryController@destroy');
});

Route::get('/admin-user', 'AdminUserController@index');

Route::get('/send', 'MailController@send');
Route::get('/mail', 'MailController@mail');
Route::get('/tax', 'MailController@tax');