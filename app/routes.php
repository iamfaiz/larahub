<?php

Route::get('/', [
	"as" => "home",
	"uses" => 'PagesController@home'
]);


// Users Routes
Route::get('/register', [
	'as' => 'Register',
	'uses' => 'RegisterationController@create'
]);

Route::get('/login', [
	'as' => 'Login',
	'uses' => 'UserController@getLogin'
]);

Route::post('/register', [
	'as' => 'register_path',
	'uses' => 'RegisterationController@store'
]);

Route::post('/login', [
	'as' => 'login_path',
	'uses' => 'UserController@postLogin'
]);

Route::get('/logout', [
	'as' => 'logout_path',
	'uses' => 'UserController@logout'
]);


// Statuses Routes

Route::get('/statuses', [
	'as' => 'statuses',
	'uses' => 'StatusController@index',
	'before' => 'passwordProtected'
]);
