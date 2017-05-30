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

Route::get('houses/orderBy/{order}', 'HouseController@orderBy')->name('houses.orderBy');
Route::get('houses/modify', 'HouseController@modify')->name('houses.modify');
Route::post('houses/modify', 'HouseController@modifyPrice')->name('houses.modifyPrice');
Route::resource('houses', 'HouseController');
