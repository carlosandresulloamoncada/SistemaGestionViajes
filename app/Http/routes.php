<?php

/* Rutas del sistema */
Route::get('/', 'WelcomeController@index');



Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
