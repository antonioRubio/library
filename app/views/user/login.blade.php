@extends('layout')
@section('content')
    {{ Form::open() }}
        {{ $errors->first('password') }}<br>
        <div class="form-group">
            {{ Form::label('username', 'User') }}
            {{ Form::text('username', null, array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'User')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::text('password', null, array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Password')) }}
        </div>
        {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@stop