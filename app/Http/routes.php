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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('rregjistrim','PersonatController');
Route::post('rregjistrim/store','PersonatController@store');
Route::get('rregjistrim/edit/{id}','PersonatController@edit');

Route::resource('dega','DegaController');
Route::post('dega/store','DegaController@store');
Route::get('dega/edit/{id}','DegaController@edit');

Route::resource('programi','ProgramiController');
Route::post('programi/store','ProgramiController@store');
Route::get('programi/edit/{id}','ProgramiController@edit');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('register/verify/{confirmationCode}', [
	'as' => 'confirmation_path',
	'uses' => 'RegistrationController@confirm'
]);