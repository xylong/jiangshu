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

// 文章
Route::resource('posts','PostsController');
Route::post('upload_image','PostsController@uploadImage')->name('posts.upload_image');
