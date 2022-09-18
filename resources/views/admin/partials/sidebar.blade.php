<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('admin-assets')}}/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route('dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Top Section</span><i class="fa fa-heading"></i></a>
                <ul class="nav-2-level collapse">
                    <li class=" @yield('top_section_active')">
                        <a href="{{ route('top.section') }}">Manage</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">About Section</span><i class="fa fa-heading"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
{{--                        <a href="{{ route('top.section') }}">Manage</a>--}}
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">N</span><i class="fa fa-heading"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="#">Store</a>
                    </li>
                    <li>
                        <a href="#">Manage</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
