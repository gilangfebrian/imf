@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
Log In
@stop

{{-- Content --}}
@section('content')

{{ Form::open(array('action' => 'SessionController@store')) }}
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
            @if(Session::has('message'))
            <center><span class="label label-danger">{{ Session::get('message') }}</span></center>
            @endif
            @if(Session::has('flash_error'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_error') }}
            </div>
            @endif

            @if($errors->has('email'))
            <span class="label label-danger">{{ ($errors->has('email') ? $errors->first('email') : '') }}</span>
            <p></p>
                @endif

            <div class="form-group">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus')) }}
            </div>

            @if($errors->has('password'))
            <span class="label label-danger">{{ ($errors->has('password') ? $errors->first('password') : '') }}</span>
            <p></p>
            @endif
            <div class="form-group">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
            </div>
        </div>
        <div class="panel-footer">
            {{ Form::submit('Login', array('class' => 'btn btn-success'))}}
            <a class="btn btn-primary" href="{{ route('forgotPasswordForm') }}">Forgot Password</a>
        </div>
    </div>
</div>

@stop