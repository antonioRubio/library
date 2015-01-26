@extends('layout')
@section('content')
    @include('books/navbar')
    <h1>All the Books</h1>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Isbn</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>
                        {{ Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'delete', 'class' => 'pull-right')) }}
                            {{ Form::submit('Delete this Book', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                        {{ HTML::linkRoute('books.show', 'Show this book', array('id' => $book->id), array('class' => 'btn btn-small btn-success')) }}
                        {{ HTML::linkRoute('books.edit', 'Edit this book', array('id' => $book->id), array('class' => 'btn btn-small btn-info')) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </ul>
@stop