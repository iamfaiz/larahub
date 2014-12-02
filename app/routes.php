<?php

Route::get('/', [
	"as" => "home",
	"uses" => 'PagesController@home'
]);


// Users Routes

Route::get('/users', [
	'as' => 'Users',
	'uses' => 'UserController@index'
]);

Route::get('/user/{id}', [
	'uses' => 'UserController@show'
]);

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

Route::post('/statuses', [
	'as' => 'post_status',
	'uses' => 'StatusController@create',
	'before' => 'passwordProtected'
]);


// Following users

Route::get('/follow/{userId}', [
	'as' => 'FollowUser',
	'uses' => 'FollowsController@store',
	'before' => 'passwordProtected'
]);


// for debugging

Route::get('/debug', function(){
	return User::getFollows(Auth::user()->id);
});