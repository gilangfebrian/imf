@extends('layouts.base')

@section('body')
    <body class="empty resize-fill-and-clip">
        <div class="wraper">

            <div id="main">
                <div id="content">
                    <div class="page-front">
                        <div class="logo">
                     
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="pad-wide"></div>
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </body>
@stop