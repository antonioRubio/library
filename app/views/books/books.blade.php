@extends('layout')
@section('content')
    {{ Form::open(array('action' => 'Book@insert')) }}
    {{ Form::close() }}
    @foreach($books as $book)
        <p>{{ $book->isbn }}</p>
    @endforeach
@stop