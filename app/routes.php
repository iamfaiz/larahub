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

Route::post('/register', [
	'as' => 'register_path',
	'uses' => 'RegisterationController@store'
]);
