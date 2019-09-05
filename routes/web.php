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

Route::get('/', 'CustomersController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/add', 'CustomersController@add');
Route::get('/customers/edit/{customer}', 'CustomersController@edit');
Route::get('/customers/delete/{customer}', 'CustomersController@delete');

Route::post('/customers/add', 'CustomersController@insert');
Route::post('/customers/edit/{customer}', 'CustomersController@update');
Route::post('/customers/delete/{customer}', 'CustomersController@purge');
