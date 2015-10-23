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



Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as'   =>  'welcome',
	'middleware' => ['guest']
]);

/**
 * Registration routes
 */
Route::get('/register', [
  'uses' => 'Auth\AuthController@getRegister',
  'as'   => 'auth.register'
]);
Route::post('/register' , 'Auth\AuthController@postRegister');

/**
 * Authentication routes
 */

Route::get('/logout', [
  	'uses' => 'Auth\AuthController@getLogout',
	'as'   => 'auth.logout'
]);

Route::get('/login', [
  	'uses' => 'Auth\AuthController@getLogin',
	'as'   =>  'auth.login',
	'middleware' => ['guest']
]);


Route::post('/login', [
  'uses' => 'Auth\AuthController@postLogin',
  'as' => 'post.login',
  'middleware' => ['guest']
]);

/**
 * user dashboard
 */
Route::get('/dashboard',[
	'uses' => 'HomeController@index',
	'as'   => 'dashboard',
	'middleware' => ['auth']
]);

Route::post('/video', [
	'uses' 	=> 'HomeController@store',
	'as'	=> 'post.video'
]);


/**
 *Edit user profile
 */

Route::get('profile/{id}', [
	'uses' => 'HomeController@edit',
	'as'   => 'profile.edit',
	'middleware' => ['auth']
]);

Route::post('profile/{id}', [
	'uses' => 'HomeController@update',
	'as'	=> 'user.profile',
	'middleware' => ['auth']
]);

/**
 * fetch categories
 */

Route::get('categories/{id}', 'WelcomeController@categories');

/**
 * Social authentication routes
 */

Route::get('{provider}', 'Auth\AuthController@doSocial');

