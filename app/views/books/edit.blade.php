@extends('layout')
@section('content')
    {{ Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'put')) }}
    {{ Form::label('name', 'Name') }} {{ Form::text('name', null, array('required' => 'required')) }}
    <br>
    {{ Form::label('isbn', 'Isbn') }} {{ Form::text('isbn', null, array('required' => 'required')) }}
    <br>
    {{ Form::submit('submit') }}
    {{ Form::close() }}
@stop