@extends('sidebar')
@section('content')
<!-- Main component for a primary marketing message or call to action -->
<body>


</body>
<div class="panel panel-default">
<div class="panel-heading">
    <h3 style="padding-left:20px"><i>Online Test || E-Training</i>
    </h3>
</div>

<div class="panel-body">


<div class="">

    @if (Session::has('messages'))
    @foreach (Session::get('messages') as $message)
    @if ($message[0] == 'error')
    <div class="alert alert-danger">{{$message[1]}}</div>
    @elseif ($message[0] == 'success')
    <div class="alert alert-success">{{$message[1]}}</div>
    @endif
    @endforeach
    @endif

<div class="col-md-{{Sentry::getUser()->hasAccess('admin') ? '6' : '12'}}">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Test Record
            </h3>
        </div>
        <div class="panel-body">
            @if ($userJawabLembars->isEmpty())
            <div class="">
                @if(!is_array($userJawabLembars))
                <div class="alert alert-warning"><strong>Sorry</strong> you aren't taking any test yet.</div>
                @endif
            </div>
            @endif

            @if (!$userJawabLembars->isEmpty())
            <table class="table table-striped table-responsive">
                <thead>
                <th>Test Name</th>
                <th>Time Record</th>
                <th>Grade</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($userJawabLembars as $userJawabLembar)
                <tr>
                    <td>
                        {{$userJawabLembar->lembar->nama}}
                    </td>
                    <td>
                        {{ date("d F Y H:i:s",strtotime($userJawabLembar->wkt_mulai)) }}
                    </td>
                    <td>
                        {{$userJawabLembar->wkt_selesai ? $userJawabLembar->score : 'Not Finished Yet'}}
                    </td>
                    <td>
                        @if ($userJawabLembar->wkt_selesai)
                        <a href="{{action('UjiansController@show', array($userJawabLembar->id))}}"
                           class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-eye-open"></span> View
                        </a>
                        <a href="{{action('UserjawablembarsController@show', array($userJawabLembar->lembar->id))}}"
                           class="btn btn-info btn-xs">
                            <span class="glyphicon glyphicon-align-left"></span> View Rank
                        </a>
                        @else
                        <a href="{{action('SoalujiansController@show', array($userJawabLembar->id, 0))}}"
                           class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-play"></span> Continue
                        </a>
                        @endif


                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @endif


        </div>
    </div>
  </div>
</div>


@if (Sentry::getUser()->hasAccess('admin'))
<div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h6>Questions List
                <small>{{$soalscount}}</small>
            </h6>
        </div>
        <div class="panel-body">

            @if ($soals->isEmpty())
            <div class="">
                @if(!is_array($soals))
                <div class="alert alert-warning"><strong>Maaf</strong> daftar soal tidak ditemukan</div>
                @endif
            </div>
            @endif

            @if (!$soals->isEmpty())
            <table class="table table-striped table-responsive">
                <thead>
                <th>Pertanyaan</th>
                <th>Kategori</th>
                <th>Max Point</th>
                <th>Durasi</th>
                </thead>
                <tbody>
                @foreach($soals as $soal)
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
                        <a href="{{action('SoalsController@show', array($soal->id))}}"
                           class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-eye-open"></span> Lihat
                        </a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{action('SoalsController@index')}}" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-th-list"></span> Daftar Soal Lengkap
            </a>

            @endif

        </div>
    </div>
</div>
@endif

<div class="col-md-{{Sentry::getUser()->hasAccess('admin') ? '6' : '12'}}">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">Test List
                 ( {{$lembarscount}} )
            </h3>
        </div>
        <div class="panel-body">

            @if ($lembars->isEmpty())
            <div class="">
                @if(!is_array($lembars))
                <div class="alert alert-warning"><strong>Sorry</strong> there's no available test.</div>
                @endif
            </div>
            @endif

            @if (!$lembars->isEmpty())
            <table class="table table-striped table-responsive">
                <thead>
                <th>Test Name</th>
                <th>Category</th>
                <th>Total Questions</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($lembars as $lembar)
                <tr>
                    <td>
                        {{$lembar->nama}}
                    </td>
                    <td>
                        {{$lembar->kategori->nama}}
                    </td>
                    <td>
                        {{$lembar->limit}}
                    </td>
                    <td>
                        <a href="{{action('LembarsController@show', array($lembar->id))}}"
                           class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-play"></span> Take
                        </a>

                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            @endif

        </div>
    </div>
</div>

</div>
</div>
@stop