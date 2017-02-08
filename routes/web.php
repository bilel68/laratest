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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/guest', 'GuestController@index');
Route::post('/guest/new', 'GuestController@insertOne');
Route::get('/guest/new', 'GuestController@newGuestForm');
Route::get('/guest/{id}', 'LivreController@getOne');
Route::get('/logout', 'Auth\LoginController@logout');
