<?php

class BookController extends BaseController
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::all();
		return View::make('books/index')
			->with('books', $books)
			->with('title', 'Index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('books/create')
			->with('title', 'Create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$isbn = Input::get('isbn');
		if (!empty($name) && !empty($isbn)) {
			Book::firstOrCreate(array('name' => $name, 'isbn' => $isbn));
		}
		return Redirect::route('books.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$book = Book::find($id);
		return View::make('books/show')
			->with('book', $book)
			->with('title', 'Show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$book = Book::find($id);
		return View::make('books/edit')
			->with('book', $book)
			->with('title', 'Edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name' => 'required',
			'isbn' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if (!$validator->fails()) {
			$book = Book::find($id);
			$book->name = Input::get('name');
			$book->isbn = Input::get('isbn');
			$book->save();
		}
		return Redirect::route('books.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Book::destroy($id);
		return Redirect::route('books.index');
	}

}
