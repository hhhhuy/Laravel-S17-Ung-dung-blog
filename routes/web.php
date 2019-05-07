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

Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', 'BlogController@index')->name('blogs.index');
    Route::get('/create', 'BlogController@create')->name('blogs.create');
    Route::post('/create', 'BlogController@store')->name('blogs.store');
    Route::get('/{id}/edit', 'BlogController@edit')->name('blogs.edit');
    Route::post('/{id}/edit', 'BlogController@update')->name('blogs.update');
    Route::get('/{id}/destroy', 'BlogController@destroy')->name('blogs.destroy');
    Route::get('/{id}/show', 'BlogController@show')->name('blogs.show');
});