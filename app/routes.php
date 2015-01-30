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

Route::get('/', array('as' => 'index', function()
{
	return View::make('layout');
}));

Route::group(array('before' => 'auth'), function()
{
	Route::resource('books', 'BookController');
});

Route::any('/login', array('as' => 'login', 'uses' => 'UserController@login'));

Route::any('/logout', array('as' => 'logout', 'uses' => 'UserController@logout'));