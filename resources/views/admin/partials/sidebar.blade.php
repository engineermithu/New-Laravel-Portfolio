<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
{{--                <img src="{{ asset('images/'.Sentinel::getUser()->image)}}" width="45px" />--}}
                <img src="{{Sentinel::getUser()->image != null? asset('images/'.Sentinel::getUser()->image) : asset('/images/user.jpg')}}"
                     class="rounded-circle profile-widget-picture" width="45" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name}}</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active text-decoration-none" href="{{ route('dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark "></i>
                    <span class=" text-decoration-none">Top Section</span><i class="fa fa-heading"></i></a>
                <ul class="nav-2-level collapse">
                    <li class="text-decoration-none @yield('top_section_active')">
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
                    <span class="nav-label">Editor</span><i class="fa fa-heading"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="#">Manage</a>
                    </li>
                    <li class="@yield('roles')"><a class="nav-link" href="{{ route('admin.roles') }}"> {{ __('Roles') }}</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
