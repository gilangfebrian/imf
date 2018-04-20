@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Register
@stop

{{-- Content --}}
@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center> Registrasi Peserta </center>
        </div>
        <div class="panel-body">
            {{ Form::open(array('action' => 'UserController@store')) }}
                    
            <div class="form-group {{ ($errors->has('training')) ? 'has-error' : '' }}">
            {{ Form::select('unit', $diklat , Input::old('diklat'), ['placeholder' => 'Pilih Training','class' => 'form-control']) }}
            {{ ($errors->has('training') ? $errors->first('training') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('nama')) ? 'has-error' : '' }}">
            {{ Form::text('nama', null, array('class' => 'form-control', 'placeholder' => 'Nama')) }}
            {{ ($errors->has('nama') ? $errors->first('nama') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('nip')) ? 'has-error' : '' }}">
            {{ Form::text('nip', null, array('class' => 'form-control', 'placeholder' => 'Nomor Induk Pegawai (NIP)')) }}
            {{ ($errors->has('nip') ? $errors->first('nip') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('unit')) ? 'has-error' : '' }}">
            {{ Form::text('unit', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja')) }}
            {{ ($errors->has('unit') ? $errors->first('unit') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('npwp')) ? 'has-error' : '' }}">
            {{ Form::text('npwp', null, array('class' => 'form-control', 'placeholder' => 'Nomor Pokok Wajib Pajak (NPWP)')) }}
            {{ ($errors->has('npwp') ? $errors->first('npwp') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Alamat Email')) }}
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
            {{ ($errors->has('password') ? $errors->first('password') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
            {{ ($errors->has('password_confirmation') ? $errors->first('password_confirmation') : '') }}
            </div>
            
            {{ Form::submit('Registrasi', array('class' => 'btn btn-primary')) }}
            <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>

            {{ Form::close() }}
            
        </div>
    </div>
</div>


@stop