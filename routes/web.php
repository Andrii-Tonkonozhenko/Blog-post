<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home');

Route::resource('book', 'BookController');

//Route::get('/book', 'LibraryController@book')->name('book');
//Route::get('/create', 'LibraryController@create')->name('create');
//Route::get('/show/{id}', 'LibraryController@show')->name('show');
//Route::get('/edit/{id}', 'LibraryController@edit')->name('edit');
//Route::get('/delete/{id}', 'LibraryController@destroy')->name('destroy');
//
//Route::post('/book/check', 'LibraryController@library_check');
//Route::put('/book/update/{id}', 'LibraryController@update')->name('update');


