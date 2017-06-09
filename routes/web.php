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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test','PrakerinController@percobaan');

// Route::get('test1','PrakerinController@percobaan1');

// Route::get('test2','PrakerinController@percobaan2');

// Route::get('test3','PrakerinController@percobaan3');

// Route::get('test4','PrakerinController@percobaan4');

// Route::get('halaman/{id}', 'PrakerinController@param');

// Route::get('{a}', 'PrakerinController@parameter');

Route::get('Coba', 'CobaController@test');

//Route::get('{id}', 'CobaController@testt');

Route::get('index', 'CobaController@indexa');

Route::get('buah', 'CobaController@indexi');

Route::get('nama', 'CobaController@indexn');

Route::get('test/{id}', 'CobaController@indexh');

