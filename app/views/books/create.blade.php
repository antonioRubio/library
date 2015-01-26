@extends('layout')
@section('content')
    @include('books/navbar')
    {{ Form::open(array('route' => 'books.store')) }}
        {{ Form::label('name', 'Name') }} {{ Form::text('name', null, array('required' => 'required')) }}
        <br>
        {{ Form::label('isbn', 'Isbn') }} {{ Form::text('isbn', null, array('required' => 'required')) }}
        <br>
        {{ Form::submit('submit') }}
    {{ Form::close() }}
@stop