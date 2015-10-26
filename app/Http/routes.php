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
	'uses' 		=> 'WelcomeController@index',
	'as'   		=>  'welcome',
	'middleware'=> ['guest']
]);

/*
| -------------------------------------------------------------
| * Authentication routes
|--------------------------------------------------------------
*/
Route::get('/register', [
  'uses' => 'Auth\AuthController@getRegister',
  'as'   => 'auth.register'
]);

Route::post('/register' , 'Auth\AuthController@postRegister');


Route::get('/logout', [
  	'uses' => 'Auth\AuthController@getLogout',
	'as'   => 'auth.logout'
]);

Route::get('/login', [
  	'uses' 		=> 'Auth\AuthController@getLogin',
	'as'   		=>  'auth.login',
	'middleware'=> ['guest']
]);


Route::post('/login', [
  'uses' 		=> 'Auth\AuthController@postLogin',
  'as' 			=> 'post.login',
  'middleware' 	=> ['guest']
]);

/*
|--------------------------------------------------------
| User action routes
|--------------------------------------------------------
*/

Route::get('/dashboard',[
	'uses' 			=> 'HomeController@index',
	'as'   			=> 'dashboard',
	'middleware' 	=> ['auth']
]);

Route::post('/video', [
	'uses' 	=> 'VideoController@store',
	'as'	=> 'post.video'
]);


Route::get('profile/{id}', [
	'uses' 			=> 'UserProfileController@edit',
	'as'   			=> 'profile.edit',
	'middleware' 	=> ['auth']
]);

Route::post('profile/{id}', [
	'uses' 			=> 'UserProfileController@update',
	'as'			=> 'user.profile',
	'middleware' 	=> ['auth']
]);

Route::get('/categories/create',[
 	'uses' 		=> 'CategoryController@create',
	'as'    	=> 'category.create',
	'middleware'=> ['auth']
]);


Route::post('/categories', [
	'uses'		=> 'CategoryController@store',
	'as'		=> 'post.category',
  	'middleware'=> ['auth']
]);

Route::put('/categories/:id', [
	'uses'		=> 'CategoryController@update',
	'as'		=> 'category.update',
	'middleware'=> ['auth']
]);

Route::get('categories/{id}', 'WelcomeController@categories');


Route::get('/video/{id}',[
	'uses' 	=> 'VideoController@show',
	'as'	=> 'show.video'
]);

/*
|-------------------------------------------------------
| Social auth route
|-------------------------------------------------------
*/

Route::get('{provider}', 'Auth\AuthController@doSocial');

