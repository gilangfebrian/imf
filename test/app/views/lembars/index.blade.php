@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="padding-left:20px">Quiz List
            <small>({{$count}})</small>
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


        <a href="{{action('LembarsController@create')}}" class="btn btn-primary btn-sm pull-right">
            <span class="glyphicon glyphicon-plus"></span> Add Quiz
        </a>

        <br/>
        <br/>

        @if ($lembars->isEmpty())
        <div class="">
            @if(!is_array($lembars))
            <div class="alert alert-warning"><strong>Sorry</strong> data not found.</div>
            @endif
        </div>
        @endif

        @if (!$lembars->isEmpty())
        <table class="table table-striped table-responsive">
            <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Questions</th>
            <th>Time Limit</th>
            <th>Random</th>
            <th>Question Availability</th>
            <th>Created</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($lembars as $lembar)
            <tr>
                <td>
                    {{$lembar->nama}}
                </td>
                <td>
                    <p class="popover-hover" data-content="{{ $lembar->keterangan }}">
                        {{Str::limit(strip_tags($lembar->keterangan), 10)}}</p>
                </td>
                <td>
                    {{$lembar->kategori->nama}}
                </td>
                <td>
                    {{$lembar->limit}}
                </td>
                <td>
                    {{$lembar->batas_waktu}} Menit
                </td>
                <td>
                    {{$lembar->is_random ? 'Ya' : 'Tidak'}}
                </td>
                <td>
                    {{$lembar->SoalHasLembar->count()}}
                </td>
                <td>
                    {{$lembar->user->email}}
                </td>
                <td>
                    {{ Form::open(array('method' => 'DELETE', 'action' => array('LembarsController@destroy',
                    $lembar->id) ))
                    }}
                    <a href="{{action('LembarsController@show', array($lembar->id))}}" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-eye-open"></span> View
                    </a>
                    <a href="{{action('LembarsController@edit', array($lembar->id))}}" class="btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-pencil"></span> Edit
                    </a>
                    <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>
                        Delete
                    </button>
                    {{ Form::close() }}

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {{$lembars->links()}}
        @endif

    </div>
</div>
@stop