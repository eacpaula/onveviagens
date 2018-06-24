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

/**
 * Users Routes
 */
Auth::routes();

Route::get('user/home', 'HomeController@index')->name('home');

Route::get('user/edit', 'Auth\EditController@index')->name('edit')->middleware('auth');

Route::post('user/update', 'Auth\EditController@update')->name('update')->middleware('auth');

Route::post('user/travels', 'Auth\TravelController@index')->name('travels')->middleware('auth');

Route::post('user/travel/{id}', 'Auth\TravelController@detail')->name('travel')->middleware('auth');


/**
 * Website Routes
 */

Route::get('/', 'HomeController@index')->name('home');

Route::get('home', 'HomeController@index')->name('home');

Route::post('travels', 'TravelController@index')->name('travels');

Route::post('travel/{id}', 'TravelController@detail')->name('travel');