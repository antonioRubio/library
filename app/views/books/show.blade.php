@extends('layout')
@section('content')
    {{ Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'put')) }}
    {{ Form::label('name', 'Name') }} {{ Form::text('name') }}
    <br>
    {{ Form::label('isbn', 'Isbn') }} {{ Form::text('isbn') }}
    <br>
    {{ Form::label('created_at', 'Created') }} {{ Form::text('created_at') }}
    <br>
    {{ Form::label('updated_at', 'Updated') }} {{ Form::text('updated_at') }}
    <br>
    {{ Form::close() }}
    {{ Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'delete')) }}
    {{ Form::submit('delete') }}
    {{ Form::close() }}
    {{ Form::open(array('route' => array('books.edit', $book->id), 'method' => 'get')) }}
    {{ Form::submit('edit') }}
    {{ Form::close() }}
@stop