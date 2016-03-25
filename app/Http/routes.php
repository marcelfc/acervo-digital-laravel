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

Route::get('/welcome', 'WelcomeController@index');

Route::get('/', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth'], function () {

	Route::resource('acervo', 'AcervoController', [

		'index' => 'acervo.index',
		'create' => 'acervo.create',
		'store' => 'acervo.store',
		'show' => 'acervo.show',
		'edit' => 'acervo.edit',
		'update' => 'acervo.update',
		'destroy' => 'acervo.destroy',

	]);

	Route::resource('user', 'UserController', [

		'index' => 'user.index',
		'create' => 'user.create',
		'store' => 'user.store',
		'show' => 'user.show',
		'edit' => 'user.edit',
		'update' => 'user.update',
		'destroy' => 'user.destroy',

	]);

	Route::get('/acervo/delete/{id}', 'AcervoController@delete');
	Route::get('/user/delete/{id}', 'UserController@delete');
	Route::get('/admin/teste', 'AcervoController@teste');
	Route::get('/admin/file_upload', 'AcervoController@file_upload');
	Route::post('/acervo/file_upload', 'AcervoController@file_upload');
	Route::get('/admin', 'AdminController@index');

});

Route::resource('home', 'HomeController', [

	'index' => 'home.index',
	'show' => 'home.show'

]);
Route::get('/home/acervo/galeria','HomeController@acervo');
Route::get('/historia', function()
{
	return view('front_user.historia');
});
Route::get('/contato','HomeController@contato');


