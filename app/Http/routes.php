<?php

/* Rutas del sistema */

// Route::get('/', 'WelcomeController@index');



Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
