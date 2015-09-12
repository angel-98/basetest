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

/**
 * Esta es la ruta del root por defecto
 */
Route::get('/', 'DashController@landing');

/*
|--------------------------------------------------------------------------
| Rutas de autentificación
|--------------------------------------------------------------------------
|
| Aqui estamos usando las rutas de autentificación por defecto que
| ofrece laravel y los controladores que heredan funcionalidad de
| Auth. Solo bastara con darle un theme a las vistas
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('home', 'DashController@home');
/*
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Rutas resource de settings y usarios
|--------------------------------------------------------------------------
| Rutas especificas para el manejo de usuarios roles y permisos
|
*/

Route::resource('usuarios', 'UserController');

Route::resource('permisos', 'PermissionController');

Route::resource('roles', 'RolesController');

/*
|--------------------------------------------------------------------------
| Rutas de consulta abiertas
|--------------------------------------------------------------------------
*/

Route::controllers([
	'roles/query' 		=> 'RolesQueryController',
]);

