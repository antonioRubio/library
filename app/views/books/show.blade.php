@extends('layout')
@section('content')
    @include('books/navbar')
    <h1>Showing {{ $book->name }}</h1>
    <div class="jumbotron text-center">
        <h2>{{ $book->name }}</h2>
        <p><strong>Isbn:</strong> {{ $book->isbn }}</p>
    </div>
    {{ Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'delete', 'class' => 'pull-right')) }}
    {{ Form::submit('Delete', array('class' => 'btn btn-small btn-warning')) }}
    {{ Form::close() }}
    {{ Form::open(array('route' => array('books.edit', $book->id), 'method' => 'get')) }}
    {{ Form::submit('Edit', array('class' => 'btn btn-small btn-info')) }}
    {{ Form::close() }}
@stop