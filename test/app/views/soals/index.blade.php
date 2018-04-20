@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 style="padding-left:20px">Question List
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


        <a href="{{action('SoalsController@create')}}" class="btn btn-primary btn-sm pull-right">
            <span class="glyphicon glyphicon-plus"></span> Add Question
        </a>

        <br/>
        <br/>

        @if ($soals->isEmpty())
        <div class="">
            @if(!is_array($soals))
            <div class="alert alert-warning"><strong>Sorry</strong> data not found.</div>
            @endif
        </div>
        @endif

        @if (!$soals->isEmpty())
        <table class="table table-striped table-responsive">
            <thead>
            <th>Question</th>
            <th>Max Point</th>
            <th>Category</th>
            <th>Duration</th>
            <th>Created</th>
            <th>Action</th>
            </thead>
            <tbody>
            @foreach($soals as $soal)
            <tr>
                <td>
                    <p class="popover-hover" data-content="{{$soal->pertanyaan}}">
                        {{Str::limit(strip_tags($soal->pertanyaan), 65)}}</p>
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
                    {{ Form::open(array('method' => 'DELETE', 'action' => array('SoalsController@destroy', $soal->id) ))
                    }}
                    <a href="{{action('SoalsController@show', array($soal->id))}}" class="btn btn-primary btn-xs">
                        <span class="glyphicon glyphicon-eye-open"></span> View
                    </a>
                    <a href="{{action('SoalsController@edit', array($soal->id))}}" class="btn btn-warning btn-xs">
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

        {{$soals->links()}}
        @endif

    </div>
</div>
@stop