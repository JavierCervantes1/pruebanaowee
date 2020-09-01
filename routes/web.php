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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

///--------- Customer Index Routes ----------///
Route::get("/", "CustomerController@index")->name('customer.index');
Route::get("/customers", "CustomerController@index")->name('customer.index');
///--------- Customer Creating Route ----------///
Route::post("/customers", "CustomerController@store");
///--------- Customer Updating Routes ----------///
Route::get('/customers/{CustomerId}/edit' , 'CustomerController@edit');
Route::put('/customers/{CustomerId}' , 'CustomerController@update');
///--------- Customer Deleting Route ----------///
Route::get('customers/{CustomerId}/destroy', 'CustomerController@destroy')->name('customer.destroy');


///--------- Address Routes ----------///
Route::get('/addresses/{CustomerId}', 'AddressController@getCustomer');
Route::post('/addresses/{CustomerId}', 'AddressController@store');
///--------- Address Updating Routes ----------///
Route::get('/addresses/{AddressId}/{CustomerId}/edit' , 'AddressController@edit');
Route::put('/addresses/{AddressId}/{CustomerId}' , 'AddressController@update');
///--------- Address Creating Route ----------///
Route::get('/addresses/{AddressId}/{CustomerId}', 'AddressController@index');


///--------- SalesOrders Routes ----------///
Route::get('/salesOrders/{CustomerId}/{AddressId}', 'SalesOrderController@index')->name('SalesRoute');
Route::post('/salesOrders/{CustomerId}/{AddressId}', 'SalesOrderController@store')->name('SalesPostRoute');

