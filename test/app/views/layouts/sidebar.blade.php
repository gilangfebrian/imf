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
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-element">
                                <i class="icon-edit icon-2"></i>
                                <span>Registrasi </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-element" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('registrasi')}}"><i class="icon-list-alt icon"></i> <span>Form Registrasi</span></a></li>
                        </ul>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-crud">
                                <i class="icon-briefcase icon-2"></i>
                                <span>Peserta Bimtek Aplikasi Satker</span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-crud" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('list')}}"><i class="icon-picture icon"></i> <span>Aplikasi Satker 2017</span></a></li>
                        </ul>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-crud">
                                <i class="icon-briefcase icon-2"></i>
                                <span>Laporan GKM</span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-crud" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('lapspan')}}"><i class="icon-picture icon"></i> <span>Stabilisasi SPAN 2017</span></a></li>
                            <li><a href="{{url('lapsatker')}}"><i class="icon-picture icon"></i> <span>Aplikasi Satker 2017</span></a></li>
                        </ul>
                    </div>
            </section>
        </div>
    </div>
</aside>