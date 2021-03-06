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
Route::resource('comments', 'CommentsController');
Route::resource('tags', 'TagsController');

Route::get('/{id}/{slug}', 'ArticlesController@show')->where('id', '[0-9]+');

Route::post('/subscribe/create', 'SubscribeController@create');

Auth::routes();

Route::post('upload/imageUpload', 'UploadController@imageUpload');
Route::get('upload/imageManager', 'UploadController@imageManager');

Route::post('upload/fileUpload', 'UploadController@fileUpload');
Route::get('upload/fileManager', 'UploadController@fileManager');

Route::get('/home', 'HomeController@index');
