<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', 'EbooksController@index');

Route::resource('/storage', 'StorageController');
Route::post('/storage/create', 'StorageController@create');

Route::group(['prefix' => 'users'], function(){

	
	Route::post('/ebooks/ckeditor', 'EbooksController@ckeditor');
	Route::post('/ebooks/editar', 'EbooksController@editar');
	Route::post('/ebooks/ruta', 'EbooksController@actualizaruta');
	Route::resource('ebooks','EbooksController');

	Route::resource('categorias', 'CategoriesController');

	
});
Route::get('/vista', function () {
    return view('vista');
});

Route::resource('/pdf', 'PdfController');
Route::post('/pdf/create', 'PdfController@create');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');