@extends('layout')
@section('content')
    @include('books/navbar')
    {{ Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'put')) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('required' => 'required', 'class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('isbn', 'Isbn') }}
            {{ Form::text('isbn', null, array('required' => 'required', 'class' => 'form-control')) }}
        </div>
        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@stop