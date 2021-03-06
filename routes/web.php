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

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/create', 'PagesController@getCreate');

Route::post('/create/submit', 'CustomersController@submit');

Route::get('/search', 'CustomersController@search');
Route::resource('customers', 'CustomersController');
