@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->

<div class="panel panel-default">
<div class="panel-heading">
    <h3 style="padding-left:20px"><i>Test Detail
        ( {{$lembar->nama}} )
        @if (Sentry::getUser()->hasAccess('admin'))
        <a href="{{action('LembarsController@index')}}" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-th-list"></span> Test List
        </a>
        @endif
    </i></h3>
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

    @if (Sentry::getUser()->hasAccess('admin'))
    {{ Form::open(array('method' => 'DELETE', 'action' => array('LembarsController@destroy', $lembar->id), 'class'
    =>
    'pull-right' )) }}
    <a href="{{action('LembarsController@edit', array($lembar->id))}}" class="btn btn-warning btn-xs">
        <span class="glyphicon glyphicon-pencil"></span> Edit
    </a>
    <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete
    </button>
    {{ Form::close() }}

    <br/>
    <br/>
    


    <blockquote class="pull-right">
        <div class="btn-default btn-xs pull-right popover-hover" data-content="dibuat oleh">
            <span class="glyphicon glyphicon-user"></span> {{$lembar->user->email}}
        </div>
        <div class="clearfix"></div>
        <div class="btn-default btn-xs pull-right popover-hover" data-content="dibuat pada">
            <span class="glyphicon glyphicon-plus"></span> {{ date("d F Y H:i",strtotime($lembar->created_at)) }}
        </div>
        <div class="clearfix"></div>
        <div class="btn-default btn-xs pull-right popover-hover" data-content="diperbaharui pada">
            <span class="glyphicon glyphicon-pencil"></span> {{ date("d F Y H:i",strtotime($lembar->updated_at)) }}
        </div>
    </blockquote>
    @endif

    <div class="clearfix"></div>
    <dl class="dl-horizontal">
        <dt>Description</dt>
        <dd>{{$lembar->keterangan}}</dd>
        <dt>Category</dt>
        <dd>{{$lembar->kategori->nama}}</dd>
        <dt>Questions</dt>
        <dd>{{$lembar->limit}}</dd>
        <dt>Time Limit</dt>
        <dd>{{$lembar->batas_waktu}} Menit</dd>
        <dt>Random</dt>
        <dd>{{$lembar->is_random ? 'Ya' : 'Tidak'}}</dd>

    </dl>


    @if (Sentry::getUser()->hasAccess('admin'))
    <hr/>
    <!-- Jawaban group-->
    <blockquote>
        <p>Question Availability</p>
    </blockquote>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#soals" data-toggle="tab">Question Availability ({{$soalhaslembar->count()}})</a></li>
        <li><a href="#banksoal" data-toggle="tab">Question Bank ({{$banksoal->count()}} / {{$countBankSoal}})</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="soals">
            <br/>
            @if ($soalhaslembar->isEmpty())
            <div class="alert alert-warning">There's no Available Question</div>
            @else
            <table class="table table-striped table-responsive">
                <thead>
                <th>Question</th>
                <th>Max Point</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Creator</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($soalhaslembar as $soallembar)
                <tr>
                    <td>
                        <p class="popover-hover" data-content="{{$soallembar->pertanyaan}}">
                            {{Str::limit(strip_tags($soallembar->pertanyaan), 30)}}</p>
                    </td>
                    <td>
                        {{$soallembar->getMaxPoint()}}
                    </td>
                    <td>
                        {{$soallembar->kategori->nama}}
                    </td>
                    <td>
                        {{$soallembar->durasi}} Minute
                    </td>
                    <td>
                        {{$soallembar->user->email}}
                    </td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'action' =>
                        array('SoalhaslembarsController@destroy', $lembar->id) ))
                        }}
                        {{Form::hidden('soal_id', $soallembar->id)}}
                        <button type="submit" class="btn btn-danger btn-xs"><span
                                class="glyphicon glyphicon-remove"></span>
                            Delete from test
                        </button>
                        {{ Form::close() }}

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="tab-pane fade" id="banksoal">
            <br/>
            @if (!$banksoal)
            <div class="alert alert-warning">There's no available question from bank question</div>
            @else
            <table class="table table-striped table-responsive">
                <thead>
                <th>Question</th>
                <th>Max Point</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Creator</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($banksoal as $soal)
                <tr>
                    <td>
                        <p class="popover-hover" data-content="{{$soal->pertanyaan}}">
                            {{Str::limit(strip_tags($soal->pertanyaan), 30)}}</p>
                    </td>
                    <td>
                        {{$soal->getMaxPoint()}}
                    </td>
                    <td>
                        {{$soal->kategori->nama}}
                    </td>
                    <td>
                        {{$soal->durasi}} Menit
                    </td>
                    <td>
                        {{$soal->user->email}}
                    </td>
                    <td>
                        {{ Form::open(array('method' => 'POST', 'action' => array('SoalhaslembarsController@store',
                        $lembar->id) ))
                        }}
                        {{Form::hidden('soal_id', $soal->id)}}
                        <button type="submit" class="btn btn-success btn-xs"><span
                                class="glyphicon glyphicon-plus"></span>
                            Add to Test
                        </button>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    
    
    <div class="pull-right clearfix">
        <a href="{{action('UserjawablembarsController@show', array($lembar->id))}}" class="btn btn-success">
            <span class="glyphicon glyphicon-align-left"></span> View Rank
        </a>
    </div>
    <br/>
    <br/>
    <br/>
    @endif
    @if (Sentry::getUser()->hasAccess('admin'))
    @else

    {{ Form::open(array('method' => 'POST', 'action' => array('UjiansController@store'), 'class' =>
    'pull-right' )) }}
    {{Form::hidden('lembar_id', $lembar->id)}}
    <div class="clearfix">
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-play"></span> Start
        </button>
    </div>
    {{ Form::close() }}
    @endif

</div>
</div>
@stop