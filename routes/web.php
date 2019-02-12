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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sorteos/{id}/participantes', 'SorteosController@show');

Route::post('/sorteos/participar', 'SorteosController@participar');

Route::get('/sorteos/create', 'SorteosController@create');
Route::post('/sorteos/store', 'SorteosController@store');

Route::get('/sorteos/ver', 'SorteosController@index');





;
