<?php

class BookController extends BaseController {

	public function index()
	{
		$books = Book::all();
		return View::make('books/index')->with('books', $books);
	}

}
