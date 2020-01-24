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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'rates', 'as' => 'rates.'], function() {
    Route::get('download/{filename}',['as' => 'download', 'uses' => 'RatesController@download']);
    Route::get('show/import',['as' => 'show.import', 'uses' => 'RatesController@showImport']);
    Route::post('import',['as' => 'import', 'uses' => 'RatesController@import']);
});


