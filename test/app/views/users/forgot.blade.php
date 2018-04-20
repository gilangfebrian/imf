@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Forgot Password
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
        {{ Form::open(array('action' => 'UserController@forgot', 'method' => 'post')) }}
        <div class="panel-heading">
        <h4>Forgot your Password?</h4>
        </div>
        <div class="panel-body">
        <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail', 'autofocus')) }}
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
        </div>

        {{ Form::submit('Reset Password', array('class' => 'btn btn-primary'))}}
        <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>
        {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@stop