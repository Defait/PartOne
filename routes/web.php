<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('device', 'DeviceController@index');
Route::get('device/{device}', 'DeviceController@show');

Route::get('vendor', 'VendorController@index');
Route::get('vendor/{vendor}', 'VendorController@show');

Route::get('part', 'PartController@index');
Route::get('part/{part}', 'PartController@show');
