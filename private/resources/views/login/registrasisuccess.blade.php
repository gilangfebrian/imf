@extends('layouts.frontend')

@section('content')
    <div class="container">
    @if(Session::has('message'))
    <center><span class="label label-success">{{ Session::get('message') }}</span></center>
@endif
<p></p>
        <div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Registrasi Selesai </center>
    </div>
    <div class="panel-body">
        <center>
		
		Registrasi selesai silahkan cek Email Anda:
		<br>
        <img src="private/resources/assets/img/amf2018-logos.jpg"><br>
        <a href="{{url('/')}}" class="btn btn-danger">Selesai</a>
        @stop
    </div>
    </div>
</div>
</div>