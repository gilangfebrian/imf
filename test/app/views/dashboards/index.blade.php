@extends('sidebar')
@section('content')
    <div class="page box">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Data Pegawai</h3>
                            <div class="panel-action pull-right">
                                <div class="btn-group" data-toggle="buttons">
                                </div>
                            </div>
                        </div>
                        <dl class="dl-horizontal">
                        @foreach ($d_profile as $datapro)
                        <dt>Nama/NIP</dt> 
                        <dd>{{ $datapro->nama }} / {{ $datapro->nip }}</dd>
                        <dt>Pangkat/Golongan</dt>
                        <dd>{{ $datapro->gol }}</dd>
                        <dt>Unit Eselon II</dt>
                        <dd>{{ $datapro->unit2 }}</dd>
                        <dt>Email/HP</dt>
                        <dd>{{ $datapro->email }} / {{ $datapro->hp }}</dd>
                        <dt>Atasan Langsung</dt>
                        <dd>{{ $datapro->atasan }}</dd>
                        <dt>Alamat</dt>
                        <dd>{{ $datapro->alamat }}</dd>
                        </dl>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Profile</h3>
                        </div>
                        <a href="#" class="thumbnail">
                            <img class="img-responsive img-square" src="{{asset('img/profile/people.jpg')}}" />
                        </a>
                        <dl class="dl-horizontal">
                        <dt> Training Indeks </dt>
                        <dd> - </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Riwayat Diklat</h3>
                        </div>
                        @include('elements.table.ticket')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script-end')
    @parent

    {{HTML::script('assets/plugins/bootstrap.datepicker/js/bootstrap-datepicker.js')}}
    {{HTML::script('assets/plugins/jquery.flot/jquery.flot.js')}}
    {{HTML::script('assets/plugins/jquery.flot/curvedLines.js')}}

    <script type="text/javascript">
        $(function () {

            var options = {
                series: {
                    curvedLines: {
                        active: true
                    }
                },
                axis: { min:1, max: 31},
                yaxis: { min:0, max: 10000},
                xaxis: {tickLength: 0},
                colors: ['#2C3E50'],
                grid: {show: true, borderWidth:0}
            };

            var data = generateRandomData(1, 10000, 31);
            $.plot($("#chart"), [{data: data, lines: { show: true, lineWidth: 2, fill:true}, points:{show:false}, curvedLines: {apply:true}}], options);

            options.colors = ['#2980B9'];
            options.grid.show = false;
            $.plot($("#chart1"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart2"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart3"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart4"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
    });
    </script>
@stop
