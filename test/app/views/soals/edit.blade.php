@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="padding-left:20px">Edit
            <small>{{$soal->id}}</small>
            <a href="{{action('SoalsController@show', $soal->id)}}" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-eye-open"></span> View
            </a>
            <a href="{{action('SoalsController@index')}}" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-th-list"></span> Question List
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


        {{ Form::open(array('method' => 'put', 'role' => 'form', 'class' => 'form-horizontal', 'action'
        =>array('SoalsController@update', $soal->id) )) }}
        <div class="form-group">
            {{Form::label('Pertanyaan', 'Question', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::textarea('Pertanyaan', Input::old('Pertanyaan') ? Input::old('Pertanyaan') : $soal->pertanyaan ,
                array('class' => 'form-control wys-textarea'
                ))}}
            </div>
        </div>

        <div class="form-group">
            {{Form::label('Kategori', 'Category', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::select('Kategori', $kategoriselect, Input::old('Kategori') ? Input::old('Kategori') :
                $soal->kategori_id , array('class' => 'form-control' ))}}
            </div>
        </div>

        <div class="form-group">
            {{Form::label('Estimasi_Durasi', 'Duration', array('class' => 'col-sm-2 control-label'));}}
            <div class="col-sm-10">
                {{Form::text('Estimasi_Durasi', Input::old('Estimasi_Durasi') ? Input::old('Estimasi_Durasi') :
                $soal->durasi,
                array('class' => 'form-control span2',
                'data-slider-min' => '1',
                'data-slider-value' => Input::old('Estimasi_Durasi') ? Input::old('Estimasi_Durasi') : $soal->durasi,
                'data-slider-max' => '15',
                ))}}
            </div>
        </div>


        <hr/>
        <!-- Jawaban group-->
        <blockquote>
            <p>Answer List</p>
        </blockquote>


        <div class="row">
            <div class="col-md-10">
                <div class="input-group input-group">
                    <span class="input-group-addon"><strong>A.</strong></span>
                    {{Form::textarea('Jawaban_A', Input::old('Jawaban_A') ? Input::old('Jawaban_A') :
                    $soal->jawaban[0]->jawaban, array('class' => 'form-control' , 'rows' =>
                    2))}}
            <span class="input-group-addon">
                {{Form::checkbox('a_is_benar', 1, Input::old('a_is_benar') ? Input::old('a_is_benar') : (int)$soal->jawaban[0]->is_benar, array('id' => 'a_is_benar'))}}
                {{Form::label('a_is_benar', 'Right', array('class' => 'control-label'));}}
            </span>
                </div>
            </div>

            <div class="col-md-2">

                <div class="input-group input-group">
                    <span class="input-group-addon">Poin</span>
                    {{Form::text('Point_Jawaban_A', Input::old('Point_Jawaban_A') ? Input::old('Point_Jawaban_A') :
                    (int)$soal->jawaban[0]->poin,
                    array('class' => 'form-control input-lg'))}}
                </div>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-md-10">
                <div class="input-group input-group">
                    <span class="input-group-addon"><strong>B.</strong></span>
                    {{Form::textarea('Jawaban_B', Input::old('Jawaban_B') ? Input::old('Jawaban_B') :
                    $soal->jawaban[1]->jawaban , array('class' => 'form-control' , 'rows' =>
                    2))}}
            <span class="input-group-addon">
                {{Form::checkbox('b_is_benar', 1, Input::old('b_is_benar') ? Input::old('b_is_benar') : (int)$soal->jawaban[1]->is_benar, array('id' => 'b_is_benar'))}}
                {{Form::label('b_is_benar', 'Right', array('class' => 'control-label'));}}
            </span>
                </div>
            </div>

            <div class="col-md-2">

                <div class="input-group input-group">
                    <span class="input-group-addon">Poin</span>
                    {{Form::text('Point_Jawaban_B', Input::old('Point_Jawaban_B') ? Input::old('Point_Jawaban_B') :
                    (int)$soal->jawaban[1]->poin,
                    array('class' => 'form-control input-lg'))}}
                </div>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-md-10">
                <div class="input-group input-group">
                    <span class="input-group-addon"><strong>C.</strong></span>
                    {{Form::textarea('Jawaban_C', Input::old('Jawaban_C') ? Input::old('Jawaban_C') :
                    $soal->jawaban[2]->jawaban, array('class' => 'form-control' , 'rows' =>
                    2))}}
            <span class="input-group-addon">
                {{Form::checkbox('c_is_benar', 1, Input::old('c_is_benar') ? Input::old('c_is_benar') : (int)$soal->jawaban[2]->is_benar, array('id' => 'c_is_benar'))}}
                {{Form::label('c_is_benar', 'Right', array('class' => 'control-label'));}}
            </span>
                </div>
            </div>

            <div class="col-md-2">

                <div class="input-group input-group">
                    <span class="input-group-addon">Poin</span>
                    {{Form::text('Point_Jawaban_C', Input::old('Point_Jawaban_C') ? Input::old('Point_Jawaban_C') :
                    (int)$soal->jawaban[2]->poin,
                    array('class' => 'form-control input-lg'))}}
                </div>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-md-10">
                <div class="input-group input-group">
                    <span class="input-group-addon"><strong>D.</strong></span>
                    {{Form::textarea('Jawaban_D', Input::old('Jawaban_D') ? Input::old('Jawaban_D') :
                    $soal->jawaban[3]->jawaban , array('class' => 'form-control' , 'rows' =>
                    2))}}
            <span class="input-group-addon">
                {{Form::checkbox('d_is_benar', 1, Input::old('d_is_benar') ? Input::old('d_is_benar') : (int)$soal->jawaban[3]->is_benar, array('id' => 'd_is_benar'))}}
                {{Form::label('d_is_benar', 'Right', array('class' => 'control-label'));}}
            </span>
                </div>
            </div>

            <div class="col-md-2">

                <div class="input-group input-group">
                    <span class="input-group-addon">Poin</span>
                    {{Form::text('Point_Jawaban_D', Input::old('Point_Jawaban_D') ? Input::old('Point_Jawaban_D') :
                    (int)$soal->jawaban[3]->poin,
                    array('class' => 'form-control input-lg'))}}
                </div>
            </div>
        </div>

        <br/>
        <br/>

        <div class="pull-right clearfix">
            <a href="{{action('SoalsController@show', $soal->id)}}" class="btn btn-danger btn-lg">Cancel</a>
            {{Form::submit('Save', array('class' => 'btn btn-success btn-lg'))}}
        </div>

        {{ Form::close()}}
    </div>
</div>
@stop