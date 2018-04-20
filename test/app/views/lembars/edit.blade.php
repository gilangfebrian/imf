@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="padding-left:20px">Edit
            <small>{{$lembar->nama}}</small>
            <a href="{{action('LembarsController@show', $lembar->id)}}" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-eye-open"></span> View
            </a>
            <a href="{{action('LembarsController@index')}}" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-th-list"></span> Quiz List
            </a>
        </h3>
    </div>
    <div class="panel-body">

        @if (Session::has('messages'))
        @foreach (Session::get('messages') as $message)
        @if ($message[0] == 'error')
        <div class="alert alert-danger">{{$message[1]}}</div>
        @elseif ($message[0] == 'success')
        <div class="alert alert-success">{{$message[1]}}</div>
        @endif
        @endforeach
        @endif


        {{ Form::open(array('method' => 'put', 'role' => 'form', 'class' => 'form-horizontal', 'action' => array(
        'lembars.update', $lembar->id)) ) }}


        <div class="form-group">
            {{Form::label('Judul', 'Title', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::text('Judul', Input::old('Judul') ? Input::old('Judul') : $lembar->nama, array('class' =>
                'form-control'))}}
            </div>
        </div>


        <div class="form-group">
            {{Form::label('Keterangan', 'Description', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::textarea('Keterangan', Input::old('Keterangan') ? Input::old('Keterangan') : $lembar->keterangan
                , array('class' => 'form-control wys-textarea'
                ))}}
            </div>
        </div>

        {{-- kategori --}}
        <div class="form-group">
            {{Form::label('Kategori', 'Category', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::select('Kategori', $kategoriselect, Input::old('Kategori') ? Input::old('Kategori') :
                $lembar->kategori_id, array('class' => 'form-control' ))}}
            </div>
        </div>

        {{-- limit --}}
        <div class="form-group">
            <label class="col-sm-2 control-label" for="Jumlah_Soal">
                Questions <span class="glyphicon glyphicon-question-sign popover-hover"
                                  data-content="Jumlah soal yang akan ditampilkan pada <b>kuis</b>."></span>
            </label>

            <div class="col-sm-1">
                {{Form::text('Jumlah_Soal', Input::old('Jumlah_Soal') ? Input::old('Jumlah_Soal') : $lembar->limit,
                array('class' =>
                'form-control', 'style' => ''))}}
            </div>
        </div>

        {{-- batas waktu --}}
        <div class="form-group">
            <label class="col-sm-2 control-label" for="Jumlah_Soal">
                Time Limit <span class="glyphicon glyphicon-question-sign popover-hover"
                                  data-content="Batas Waktu penyelesaian <b>kuis</b> dalam satuan <b>menit</b>."></span>
            </label>

            <div class="col-sm-1">
                {{Form::text('Batas_Waktu', Input::old('Batas_Waktu') ? Input::old('Batas_Waktu') :
                $lembar->batas_waktu, array('class' =>
                'form-control', 'style' => ''))}}
            </div>
        </div>

        {{-- random --}}
        <div class="form-group">
            <label class="col-sm-2 control-label" for="Acak_Soal">
                Random <span class="glyphicon glyphicon-question-sign popover-hover"
                                data-content="Preferensi urutan soal yang akan ditampilkan pada <b>kuis</b>. <br/>Jika <em>dicentang</em> maka sistem akan menampilkan soal pada kuis secara <b>acak</b>."></span>
            </label>

            <div class="col-sm-10">
                {{Form::checkbox('Acak_Soal', 1, Input::old('Acak_Soal') ? Input::old('Acak_Soal') : $lembar->is_random,
                array('id' => 'Acak_Soal'))}}
            </div>
        </div>


        <div class="pull-right clearfix">
            <a href="{{action('LembarsController@show', $lembar->id)}}" class="btn btn-danger btn-lg">Cancel</a>
            {{Form::submit('Save', array('class' => 'btn btn-success btn-lg'))}}
        </div>

        {{ Form::close()}}
    </div>
</div>
@stop