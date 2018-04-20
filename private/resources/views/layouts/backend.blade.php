@extends('layouts.base')

@section('style-head')
    <link href="{{asset('assets/css/social-coloredicons-buttons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery.ambiance/jquery.ambiance.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animation.css')}}" rel="stylesheet">
@stop

@section('body')
    <body>
        <div class="wraper">

            @include('layouts.sidebaradmin')

            <div id="main">

                @include('layouts.navbaradmin')

                <div id="content">
                    @yield('content')
                </div>

                @include('layouts.footer')

            </div>
        </div>
    </body>
@stop

@section('script-end')
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.ui/jquery-ui-1.10.1.custom.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-3.0.0/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery.blockUI/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap.bootbox/bootbox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.ambiance/jquery.ambiance.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery.ui.touch-punch/jquery.ui.touch-punch.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.uipro/uipro.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.livefilter/jquery.liveFilter.js')}}"></script>
    <script src="{{asset('assets/js/chatboxManager.js')}}"></script>
    <script src="{{asset('assets/js/extents.js')}}"></script>
    <script src="{{asset('assets/js/sidebar.js')}}"></script>
    <script>
          /*<![CDATA[*/
          $(function() {
            App.init();
            SideBar.init({
              shortenOnClickOutside: false
            });
          });
          /*]]>*/

    </script>
@stop
