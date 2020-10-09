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

Route::get('/', 'MainController@home');
Route::get('/posts', 'MainController@posts')->name('posts');
Route::get('/blog_post', 'MainController@blog_post');
Route::post('/blog_post/check', 'MainController@blog_post_check');
