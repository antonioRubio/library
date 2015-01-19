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
	return View::make('layout');
});

Route::get('/hello/{name}', function($name)
{
    return View::make('hello', array('name' => $name));
})->where('name', '[a-zA-Z]+');

Route::get('books', function()
{
    $books = Book::all();

    return View::make('books/books')->with('books', $books);
});

Route::post('books/insert', 'Book@insert');