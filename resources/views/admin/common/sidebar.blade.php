<div class="profile-widget-header">
        @if(Sentinel::getUser()->image != '' && is_file_exists(Sentinel::getUser()->image))
            <img alt="Not Found!" src="{{static_asset(Sentinel::getUser()->image)}}"
                 class="rounded-circle profile-widget-picture">
        @else
    <img alt="Not Found!"
{{--         src="{{get_image(Sentinel::getUser()->id,'user_image')}}"--}}
         src=""
         class="rounded-circle profile-widget-picture">
        @endif
    <div class="profile-widget-items">
        <div class="profile-widget-item text-left ml-3">
            <div
                class="profile-widget-item-value">{{Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name}}</div>
            <div class="profile-widget-item-label">{{ Sentinel::getUser()->email }}</div>
        </div>
    </div>
</div>
<div class="card-footer text-left">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link  active @yield('profile')" href="{{route('profile')}}"><i class="fa fa-user"></i> {{ __(' Profile') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @yield('password-change')"
               href="{{  route('change.password') }}"><i class='fa fa-key'></i> {{ __(' Change Password') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{route('logout')}}"  class="nav-link"
               id="setting-tab"><i class='fa fa-power-off'></i> {{ __(' Logout') }}</a>
        </li>
    </ul>
</div>


{{--@include('admin.common.logout-script')--}}
