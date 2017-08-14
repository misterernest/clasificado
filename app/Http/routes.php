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

Route::get('auth/login', [
	'uses'	=>	'Auth\AuthController@getLogin',
	'as'	=>	'login'
]);

Route::post('auth/login', [
	'uses'	=>	'Auth\AuthController@postLogin', 
	'as'	=>	'login'
]);

Route::get('auth/logout', [
	'uses'	=>	'Auth\AuthController@getLogout', 
	'as'	=>	'logout'
]);

Route::get('contact', [
	'uses'	=>	'MailController@index', 
	'as'	=>	'contact'
]);

Route::post('send', [
	'uses'	=>	'MailController@send', 
	'as'	=>	'send'
]);

Route::post('login', 'Auth\AuthController@postLogin');

Route::controller('vehicles', 'VehiclesController');


