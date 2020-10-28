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
Route::get('/vlog', 'VlogController@index')->name('vlog');
Route::post('/add', 'VlogController@add')->name('vlog.add');
Route::get('/show', 'VlogController@show')->name('vlog.show');
Route::get('/edit/{vlog}', 'VlogController@edit')->name('vlog.edit');
Route::post('/update/{vlog}', 'VlogController@update')->name('vlog.update');
Route::get('/delete/{vlog}', 'VlogController@delete')->name('vlog.delete');
Route::get('/complete/{vlog}', 'VlogController@complete')->name('vlog.complete');










Route::get('/', function () {
    return view('welcome');
});
