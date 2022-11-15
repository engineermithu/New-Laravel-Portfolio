@extends('admin.partials.master')

@section('title')
    Portfolio -Dashboard
@endsection

@section('dashboard')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="container">
                <div class="row mt-sm-4">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="d-flex justify-content-between">
                            <div class="d-block">
                                <h2 class="section-title">{{ __('User Profile') }}</h2>
                                <p class="section-lead">
                                    {{__('Update your information on this page.')}}
                                </p>
                            </div>
                        </div>

                        <div class="card profile-widget">

{{--                            @include('admin.common.sidebar')--}}
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
                                        <a class="nav-link   @yield('profile')" href="{{route('profile')}}"><i class="fa fa-user"></i> {{ __(' Profile') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active @yield('password-change')"
                                           href="{{  route('change.password') }}"><i class='fa fa-key'></i> {{ __(' Change Password') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}"  class="nav-link"
                                           id="setting-tab"><i class='fa fa-power-off'></i> {{ __(' Logout') }}</a>
                                    </li>
                                </ul>
                            </div>


                            {{--@include('admin.common.logout-script')--}}

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                <h4>{{__('Change Password')}}</h4>
                            </div>
                            <form class="needs-validation" action="{{ route('update.password') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="current_password">{{__('Current Password')}} *</label>
                                        <input type="password" class="form-control"
                                               placeholder="{{__('Enter Current Password')}}"
                                               name="current_password" id="current_password"/>
                                        @if ($errors->has('current_password'))
                                            <div class="text text-danger">
                                                {{ $errors->first('current_password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">{{__('New Password')}} *</label>
                                        <input type="password" class="form-control"
                                               placeholder="{{__('Enter New Password')}}"
                                               name="new_password" id="new_password"/>
                                        @if ($errors->has('new_password'))
                                            <div class="text text-danger">
                                                {{ $errors->first('new_password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">{{__('Confirm Password')}} *</label>
                                        <input type="password" class="form-control"
                                               placeholder="{{__('Enter Confirm Password')}}"
                                               name="confirm_password" id="confirm_password"/>
                                        @if($errors->has('confirm_password'))
                                            <div class="text text-danger">
                                                {{ $errors->first('confirm_password') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-outline-info"><i class="fa fa-save"></i>{{__(' Save Changes')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


