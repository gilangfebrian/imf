<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
    
<aside class="sidebar">
    <div class="sidebar-content">
        <div class="scrollable">
            <div href="#" class="navigation-sidebar">
                <a data-container="body" data-placement="right" data-original-title=""
                    data-sidebar-full="Click To Minimize"
                    data-sidebar-mini="Click To Auto Hide"
                    data-sidebar-auto="Click To Permanently Expand"
                >
                    <i class="switch-sidebar-icon icon-none"></i>
                </a>
            </div>

            <div class="search-sidebar hide">
                <i class="icon-search icon-2"></i>
                <form class="search-sidebar-form">
                <input type="text" class="search-query input-block-level" placeholder="Search">
                </form>
            </div>

            <section class="menu">
                <div class="accordion" id="accordion2">
                    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-dashboard">
                                <i class="icon-dashboard icon-2" ></i>
                                <span>Dashboard </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-dashboard" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('regist')}}"><i class="icon-circle-blank icon"></i> <span>Data Peserta</span>
                            <li><a href="{{url('eval')}}"><i class="icon-circle-blank icon"></i> <span>Evaluasi</span>
                        </ul>
                    </div>
                    
                    @if (Sentry::getUser()->hasAccess('admin'))    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-crud">
                                <i class="icon-briefcase icon-2"></i>
                                <span>Admin</span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-crud" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{action('SoalsController@index')}}"><i class="icon-list-alt icon"></i> <span>Question List</span></a></li>
                            <li><a href="{{action('SoalsController@create')}}"><i class="icon-file-text-alt icon"></i> <span>Add Question</span></a></li>
                            <li><a href="{{action('LembarsController@index')}}"><i class="icon-list-alt icon"></i> <span>Quiz List</span></a></li>
                            <li><a href="{{action('LembarsController@create')}}"><i class="icon-file-text-alt icon"></i> <span>Add Quiz</span></a></li>
                            <li><a href="{{url('logout')}}"><i class="icon-file-text-alt icon"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                    
                    @else    
                        
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-crud">
                                <i class="icon-briefcase icon-2"></i>
                                <span>Ujian</span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-crud" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('quiz')}}"><i class="icon-file-text-alt icon"></i> <span>E-Test</span></a></li>
                            <li><a href="{{url('logout')}}"><i class="icon-file-text-alt icon"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                    
                    @endif    
                </div>
            </section>
        </div>
    </div>
</aside>
    

<div class="container">
    @yield('content')

</div>
<!-- /container -->


@include('footer')
</body>
</html>