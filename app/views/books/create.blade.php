@extends('layout')
@section('content')
    @include('books/navbar')
    {{ HTML::ul($errors->all()) }}
    {{ Form::open(array('route' => 'books.store')) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }} {{ Form::text('name', null, array('required' => 'required')) }}
        </div>
        <div class="form-group">
        {{ Form::label('isbn', 'Isbn') }} {{ Form::text('isbn', null, array('required' => 'required')) }}
        </div>
        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@stop