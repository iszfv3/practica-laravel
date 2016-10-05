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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
	echo 'Maldito Maduro';
});

Route::get('/print',function(){
	dd(\App\Article::all());
});

Route::get('libros', 'BookController@index');
Route::get('libros/{id}', 'BookController@show')->where(['id' => '[0-9]+']);
Route::get('libros/crear', 'BookController@create');
Route::post('libros/crear', 'BookController@store');

Route::get('/form',function(){
	return view ('form');
});

Route::get('localization/{locale}','LocalizationController@index');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('articulos', 'ProductosController@index');
Route::get('articulos/{id}', 'ProductosController@muestraaId');

Route::resource('movie','MovieController');