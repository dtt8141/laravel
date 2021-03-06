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
//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('product_seeder', 'HomeController@product_seeder');
Route::get('sale_seeder', 'HomeController@sale_seeder');
Route::get('customer_seeder', 'HomeController@customer_seeder');
Route::get('distributor_seeder', 'HomeController@distributor_seeder');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);