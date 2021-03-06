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

Route::get('catlist', 'CatController@index')->name('index');
Route::get('create', 'CatController@create');
Route::post('store', 'CatController@store');
Route::get('delete/{id}', 'CatController@destroy');
Route::get('edit/{id}', 'CatController@edit');
Route::post("update","CatController@update");
