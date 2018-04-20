@extends('sidebar')

{{-- Web site Title --}}
@section('title')
@parent
Data Peserta
@stop

{{-- Content --}}
@section('content')
@if(Session::has('message'))
    <center><span class="label label-success">{{ Session::get('message') }}</span></center>
@endif
<p></p>
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center> Data Peserta </center>
        </div>
        <div class="panel-body">
            {{ Form::open(array('action' => 'UserController@regist')) }}
                    
            <div class="form-group {{ ($errors->has('training')) ? 'has-error' : '' }}">
            {{ Form::select('training', array('-' => 'Silahkan Pilih Trainig', '4' => 'Training SAKTI (Rocankeu)', '5' => 'Training Stabilisasi SPAN 2017'), null, ['placeholder' => 'Pilih Training', 'class' => 'form-control']) }}
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
            
            <div class="form-group {{ ($errors->has('instansi')) ? 'has-error' : '' }}">
            {{ Form::select('instansi', array('-' => 'Silahkan Pilih Instansi', 'BKF' => 'Badan Kebijakan Fiskal', 'BPPK' => 'Badan Pendidikan dan Pelatihan Keuangan', 'Setjen' => 'Sekretariat Jenderal', 'Itjen' => 'Inspektorat Jenderal', 'DJBC' => 'Direktorat Jenderal Bea dan Cukai', 'DJA' => 'Direktorat Jenderal Anggaran', 'DJPB' => 'Direktorat Jenderal Perbendaharaan', 'DJP' => 'Direktorat Jenderal Pajak', 'DJPPR' => 'Direktorat Jenderal Pengelolaan Pembiayaan dan Risiko', 'DJPK' => 'Direktorat Jenderal Perimbangan Keuangan', 'DJKN' => 'Direktorat Jenderal Kekayaan Negara'), null, ['placeholder' => 'Pilih Instansi', 'class' => 'form-control']) }}
            {{ ($errors->has('instansi') ? $errors->first('instansi') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('unit2')) ? 'has-error' : '' }}">
            {{ Form::text('unit2', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja (Es II)')) }}
            {{ ($errors->has('unit2') ? $errors->first('unit2') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('unit3')) ? 'has-error' : '' }}">
            {{ Form::text('unit3', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja (Es III)')) }}
            {{ ($errors->has('unit3') ? $errors->first('unit3') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('unit4')) ? 'has-error' : '' }}">
            {{ Form::text('unit4', null, array('class' => 'form-control', 'placeholder' => 'Unit Kerja (Es IV)')) }}
            {{ ($errors->has('unit4') ? $errors->first('unit4') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('npwp')) ? 'has-error' : '' }}">
            {{ Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'Nomor Handphone')) }}
            {{ ($errors->has('phone') ? $errors->first('phone') : '') }}
            </div>
            
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Alamat Email')) }}
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
            
            
            
            {{ Form::submit('Input Data', array('class' => 'btn btn-success')) }}
            <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>

            {{ Form::close() }}
            
        </div>
    </div>
</div>


@stop