@extends('layout')
@section('content')
    {{ Form::open() }}
        {{ $errors->first('password') }}<br>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::text('password') }}
        {{ Form::submit('login') }}
    {{ Form::close() }}
@stop