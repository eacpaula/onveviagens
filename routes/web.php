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

Route::get('user/home', 'HomeController@index')->name('home');

Route::get('user/edit', 'Auth\EditController@index')->name('edit')->middleware('auth');

Route::post('user/update', 'Auth\EditController@update')->name('update')->middleware('auth');

Route::post('user/travels', 'Auth\TravelController@index')->name('travels')->middleware('auth');