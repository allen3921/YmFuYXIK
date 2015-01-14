<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('test',function()
{
    return Response::json(array('hello' => 'here', 'author' => 'julian'));
});

Route::resource('car', 'CarController');
Route::resource('category', 'CategoryController');

Route::get('driver/login', 'DriverController@login');
Route::post('driver/login', 'DriverController@loginPost');
Route::get('driver/logout', array('before' => 'auth', 'uses' => 'DriverController@logout'));
Route::get('driver/register', 'DriverController@register');
Route::post('driver/register', array('before' => 'csrf', 'uses' => 'DriverController@registerPost'));
Route::get('driver/view/{id}', 'DriverController@view')->where('id', '[0-9]+');
Route::get('driver/view/all', 'DriverController@all');
Route::get('driver/edit/{id}', array('before' => 'auth', 'uses' => 'DriverController@edit'))->where('id', '[0-9]+');

