@extends('layout')
@section('content')
    <h1>Index Books</h1>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->isbn }}</li>
        @endforeach
    </ul>
@stop