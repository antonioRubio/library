@extends('layout')
@section('content')
    <h1>Index Books</h1>
    <p>{{ HTML::linkRoute('books.create', 'New Book') }}</p>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->name }}
                ({{ $book->isbn }})
                {{ Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'delete')) }}
                    {{ Form::submit('delete') }}
                {{ Form::close() }}

            </li>
        @endforeach
    </ul>
@stop