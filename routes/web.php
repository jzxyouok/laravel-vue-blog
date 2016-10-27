<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ArticlesController@index');

Route::resource('articles', 'ArticlesController', ['except' => 'show']);
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');

Route::get('{slug}', 'ArticlesController@show');

Auth::routes();

Route::post('upload/imageUpload', 'UploadController@imageUpload');
Route::get('upload/imageManager', 'UploadController@imageManager');

Route::post('upload/fileUpload', 'UploadController@fileUpload');
Route::get('upload/fileManager', 'UploadController@fileManager');

Route::get('/home', 'HomeController@index');
