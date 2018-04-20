@extends('layouts.frontend')

@section('content')
    <div class="container">
<p></p>
        <div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Registrasi Peserta </center>
    </div>
    <div class="panel-body">
        {!! Form::open(['url' => '/prosestambah']) !!}
        Nama: 
        {!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
        NIP: 
        {!! Form::text('nip', '', ['placeholder' => 'NIP', 'class' => 'form-control']) !!}
        Jenis Kelamin: 
        {!! Form::text('jenis', '', ['placeholder' => 'Jenis Kelamin', 'class' => 'form-control']) !!}
        Unit Kerja: 
        {!! Form::text('unit', '', ['placeholder' => 'Unit Kerja', 'class' => 'form-control']) !!}
        Email: 
        {!! Form::text('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) !!}
        Nomor HP: 
        {!! Form::text('unit', '', ['placeholder' => 'Unit', 'class' => 'form-control']) !!}
        Aplikasi Eksisting yang dipahami:
        {!! Form::text('aplikasi', '', ['placeholder' => 'Aplikasi Eksisting yang dipahami', 'class' => 'form-control']) !!}
        NPWP:
        {!! Form::text('npwp', '', ['placeholder' => 'NPWP', 'class' => 'form-control']) !!}
        Nomor Rekening (Diutamakan Mandiri atau BRI):
        {!! Form::text('rekening', '', ['placeholder' => 'Nomor Rekening', 'class' => 'form-control']) !!}
        Upload Foto:
        {!! Form::file('image','',array('id'=>'','class'=>'form-control')) !!}
        Upload Surat Tugas:
        {!! Form::file('file','',array('id'=>'','class'=>'form-control')) !!}
        <p></p>
        {!! Form::submit('Registrasi', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
        @stop
    </div>
    </div>
</div>
</div>