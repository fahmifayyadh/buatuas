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

Route::get('/', 'PagesController@home');

Route::get('/feature', 'PagesController@feature');

Route::get('/chat404', 'PagesController@error_start_chat');

Route::get('/login', 'PagesController@login');

Route::get('/regist', 'PagesController@regist');

route::get('/beranda', 'HomeController@index');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
Route::get('/admin','AdminController@index');
Route::get('/admin/{id}/suspand', 'AdminController@suspand');
Route::get('/profile/{id}', 'HomeController@profile');
Route::get('/profile/{id}/edit', 'HomeController@edit');
Route::post('/profile/{id}/update','UserController@update');
