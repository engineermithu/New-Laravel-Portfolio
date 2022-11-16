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
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between">
                            <div class="d-block">
                                <h2 class="section-title">{{ __('User Profile') }}</h2>
                                <p class="section-lead">
                                    {{__(' Update your information on this page.')}}
                                </p>
                            </div>
                        </div>
                        <div class="card profile-widget">
{{--                            @include('admin.common.sidebar')--}}
                            <div class="profile-widget-header text-center mt-3">
                                @if(Sentinel::getUser()->image != '' && (Sentinel::getUser()->image))
{{--                                @if(Sentinel::getUser()->image != '' && is_file_exists(Sentinel::getUser()->image))--}}


                                    <img alt="Not Found!" style="width: 120px;height: 120px;" src="{{asset('images/'.Sentinel::getUser()->image)}}" class="rounded-circle profile-widget-picture">
                                @else
                                    <img alt="Not Found!"
{{--                                                  src="{{get_image(Sentinel::getUser()->id,'user_image')}}"--}}
                                         src="{{asset('assets/img/user.jpg')}}"
                                         class="rounded-circle profile-widget-picture">
                                @endif
                                <div class="profile-widget-items text-center">
                                    <div class="profile-widget-item text-left ml-3 text-center">
                                        <div class="profile-widget-item-value">{{Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name}}</div>
                                        <div class="profile-widget-item-label">{{ Sentinel::getUser()->email }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-left mt-3">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link  active @yield('profile')" href="{{route('profile')}}"><i class="fa fa-user"></i> {{ __(' Profile') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  @yield('password-change')"
                                           href="{{  route('change.password') }}"><i class='fa fa-key'></i> {{ __(' Change Password') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('logout')}}"  class="nav-link"
                                           id="setting-tab"><i class='fa fa-power-off'></i> {{ __(' Logout') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <div class="card">
                            <div class="card-header bg-info text-white ">
                                <div class="d-flex justify-content-between">
                                    <div class="d-block">
                                        <h2 class="section-title">{{ __('Personal Information') }}</h2>
                                    </div>
                                    <div class="buttons add-button">
                                        <a href="" class="btn btn-light " data-toggle="modal" data-target="#addProfileModal"><i class="fa fa-edit"></i> {{ __( 'Edit') }}</a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="card-header justify-content-center">--}}
{{--                                <h4>{{__('Personal Information')}}</h4>--}}
{{--                                <div class="form-group ">--}}
{{--                                    <a href="" class="btn btn-outline-primary cache-btn"--}}
{{--                                       data-toggle="modal" data-target="#addProfileModal"><i class="bx bx-edit"></i> {{ __('Edit') }}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="card-body">
                                <div class="row">
                                    <table class="table mt-3 profile-head">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="fs-5">{{ __('Basics') }}</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row">{{ __('Name') }}</td>
                                            <th scope="col"
                                                class="font-normal">{{ Sentinel::getUser()->first_name.' '.Sentinel::getUSer()->last_name }}</th>
                                        </tr>
                                        <tr>
                                            <td scope="row">{{ __('Email') }}</td>
                                            <th scope="col" class="font-normal">{{ Sentinel::getUser()->email }}</th>
                                        </tr>
{{--                                        @if(Sentinel::getUser()->user_type != 'admin')--}}
                                            <tr>
                                                <td scope="row">{{ __('Phone No') }}</td>
                                                <th scope="col" class="font-normal">{{ Sentinel::getUser()->phone }}</th>
                                            </tr>
{{--                                        @endif--}}
                                        <tr>
                                            <td scope="row">{{ __('User Type') }}</td>
                                            <th scope="col"
                                                class="font-normal text-capitalize">{{ Sentinel::getUser()->user_type }}</th>
                                        </tr>
                                        <tr>
                                            <td scope="row">{{ __('Last Password Change') }}</td>
                                            <th scope="col" class="font-normal">{{ Sentinel::getUser()->last_password_change == null ? __('Not Change Yet') : \Carbon\Carbon::parse(Sentinel::getUser()->last_password_change)->diffForHumans() }}</th>
                                        </tr>
                                        <tr>
                                            <td scope="row">{{ __('Last Login') }}</td>
                                            <th scope="col" class="font-normal">{{Sentinel::getUser()->last_login != '' ? date('M d, Y h:i a', strtotime(Sentinel::getUser()->last_login)) : '' }}</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer"><h3 class="text-white">Footer</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="addProfileModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update Profile')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--                    <form method="POST" action="" enctype="multipart/form-data">--}}
                    <form method="POST" action="{{ route('update.profile',Sentinel::getUser()->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Sentinel::getUser()->id }}"/>
                        <div class="form-group row">
                            <label for="first_name" class="col-3">{{__('First Name')}} *</label>
                            <div class="col-9">
                                <input type="text" id="first_name" class="form-control"
                                       placeholder="{{__("Enter First Name")}}"
                                       name="first_name" value="{{Sentinel::getUser()->first_name}}">
                                @error('first_name')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-3">{{__('Last Name')}} *</label>
                            <div class="col-9">
                                <input type="text" id="last_name" class="form-control"
                                       placeholder="{{__('Enter Last Name')}}"
                                       name="last_name" value="{{Sentinel::getUser()->last_name}}">
                                @error('last_name')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-3">{{__('Email')}} *</label>
                            <div class="col-9">
                                <input type="email" id="email" class="form-control"
                                       placeholder="{{__('Enter Your Email')}}"
                                       name="email" value="{{Sentinel::getUser()->email}}">
                                @error('email')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-3">{{__('Phone')}} *</label>
                            <div class="col-9">
                                <input type="tel" id="phone" class="form-control"
                                       placeholder="{{__('01XXX-XXXXXXXX')}}"
                                       name="phone" value="{{Sentinel::getUser()->phone}}">
                                @error('phone')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customFile">{{__('Profile Image')}}</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input image_pick" id="customFile"
                                       data-image-for="profile" name="image" accept="image/*" />
                                <label class="custom-file-label" for="customFile"> {{__("Choose image...")}}</label>
                                @if($errors->has('image'))
                                    <div class="text text-danger mr-5">
                                        {{$errors->first('image')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if(Sentinel::getUser()->image !== '' && (Sentinel::getUser()->image))
                            <div class="form-group mt-4 text-left">
                                <img src="{{asset('images/'.Sentinel::getUser()->image) }}"
                                 alt="" id="img_profile" class="img-thumbnail user-profile"/>
                        </div>
                        @else
                        <div class="form-group mt-4 text-left">
                            <img src="{{asset('images/user.jpg')}}" alt="" id="img_profile" class="img-thumbnail user-profile" height="128" width="128"/>
                        </div>
                        @endif
{{--                        <div class="form-group mt-4 text-left">--}}
{{--                            <img src="{{ get_image(Sentinel::getUser()->id, 'user_image') }}"--}}
{{--                                 alt="" id="img_profile" class="img-thumbnail user-profile"/>--}}
{{--                        </div>--}}
                        <div class="form-group row text-right">
                            <label for="" class="col-3"></label>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-secondary">{{__(' Update')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('font-js')
    <script>
        function readURL(input, image_for) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img_' + image_for).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery(function ($){
            $(".image_pick").on("change", function () {
                var image_for = $(this).attr('data-image-for');
                readURL(this, image_for);
            });
        })
    </script>
@endsection
