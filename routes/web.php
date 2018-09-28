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
Route::get('/', 'PagesController@welcome');
Route::get('/about', 'PagesController@about');
Route::get('/lifestyle', 'PagesController@lifestyle');
Route::get('/travel', 'PagesController@travel');
Route::get('/single', 'PagesController@single');
Route::get('/contact', 'PagesController@contact');

Route::resource('posts', 'PostsController');
Auth::routes();


