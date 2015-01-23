@extends('layout')
@section('content')
    @foreach($books as $book)
        <p>{{ $book->isbn }}</p>
    @endforeach
@stop