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

/*Route::get('/', function () {
    return view('welcome');
});

Route::resource('Programas','ProgramasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Programas', 'ProgramasController@index')->name('Programas');

Route::get('/create', 'ProgramasController@create')->name('create');*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Programas','ProgramasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/Programas', 'ProgramasController@index')->name('Programas');