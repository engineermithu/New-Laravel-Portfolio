@extends('admin.partials.master')

@section('title')
    Portfolio -Staff page
@endsection

@section('top_section_active')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card mt-5">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div class="d-block mt-3">
                                        <h5 class="section-title fw-bold text-primary">{{ __('Add Staff') }}</h5>
                                    </div>
                                    <div class="buttons add-button">
                                        <a href="{{ route('admin.staffs') }}" class="btn btn-outline-primary"> <i
                                                class='fa fa-arrow-left'></i>{{__(' Back')}} </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.staffs.store')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    {{--<input type="hidden" name="_token">--}}
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="first_name"> {{__('First Name')}} *</label>
                                                <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name" class="form-control"
                                                       placeholder="{{__('Enter First Name')}}" required />
                                                @if($errors->has('first_name'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('first_name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name"> {{__('Last Name')}} *</label>
                                                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name"
                                                       class="form-control" placeholder="{{__('Enter Last Name')}}"
                                                       required/>
                                                @if($errors->has('last_name'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('last_name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="phone"> {{__('Phone')}} </label>
                                                <input type="tel" name="phone" value="{{old('phone')}}" id="phone"
                                                       class="form-control" placeholder="{{__('Enter Phone')}}" />
                                                @if($errors->has('phone'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('phone')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth"> {{__('Date of Birth')}} </label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}"
                                                       class="form-control"/>
                                                @if($errors->has('date_of_birth'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('date_of_birth')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="gender"> {{__('Gender')}} </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1"/>
                                                    <label class="form-check-label" for="gender"> {{__('Male')}}  </label>

                                                    <input class="form-check-input ml-4" type="radio" name="gender" id="gender" value="2"/>
                                                    <label class="form-check-label ml-5"
                                                           for="gender"> {{__('Female')}}</label>
                                                    <input class="form-check-input ml-4" type="radio" name="gender" id="gender" value="0" />
                                                    <label class="form-check-label ml-5" for="gender_rather_not_say"> {{__('Rather not say')}}</label>
                                                </div>
                                                @if($errors->has('gender'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('gender')}}
                                                    </div>
                                                @endif
                                            </div>
                                            {{--                                        <div class="form-group">--}}
                                            {{--                                            <label for="username"> {{__('Username')}} *</label>--}}
                                            {{--                                            <input type="text" name="username" value="{{old('username')}}" id="username" class="form-control"--}}
                                            {{--                                                   placeholder="{{__('Enter Username')}}" required>--}}
                                            {{--                                            @if($errors->has('username'))--}}
                                            {{--                                                <div class="text text-danger">--}}
                                            {{--                                                    {{$errors->first('username')}}--}}
                                            {{--                                                </div>--}}
                                            {{--                                            @endif--}}
                                            {{--                                        </div>--}}
                                            <div class="form-group">
                                                <label for="email"> {{__('Email')}} *</label>
                                                <input type="email" name="email" id="email" value="{{old('email')}}"
                                                       class="form-control" placeholder="{{__('Enter Email')}}" required>
                                                @if($errors->has('email'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('email')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password"> {{__('Password')}} * </label>
                                                <input type="password" id="password" name="password" value="{{old('password')}}"
                                                       class="form-control" placeholder="{{__('Enter Password')}}" required>
                                                @if($errors->has('password'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('password')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">{{__('Profile Image')}}</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input image_pick" id="customFile"
                                                           data-image-for="profile" name="image" accept="image/*" />
                                                    <label class="custom-file-label" for="customFile"> {{__("Choose image...")}}</label>
                                                    {{--                                @if($errors->has('image'))--}}
                                                    {{--                                    <div class="text text-danger mr-5">--}}
                                                    {{--                                        {{$errors->first('image')}}--}}
                                                    {{--                                    </div>--}}
                                                    {{--                                @endif--}}
                                                    @error('image')
                                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            @if(Sentinel::getUser()->image !== '' && (Sentinel::getUser()->image))
                                                <div class="form-group mt-4 text-left">
                                                    <img src="{{asset('images/'.Sentinel::getUser()->image) }}"
                                                         alt="" id="img_profile" class="img-thumbnail user-profile" height="128" width="128" />
                                                </div>
                                            @else
                                                <div class="form-group mt-4 text-left">
                                                    <img src="{{asset('images/user.jpg')}}" alt="" id="img_profile" class="img-thumbnail user-profile" height="128" width="128"/>
                                                </div>
                                            @endif
{{--                                            <div class="form-group">--}}
{{--                                                <label for="customFile">{{__('Profile Image')}}</label>--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input type="file" class="custom-file-input image_pick" id="customFile"--}}
{{--                                                           data-image-for="profile" name="image" accept="image/*"/>--}}
{{--                                                    <label class="custom-file-label"--}}
{{--                                                           for="customFile">{{__(' Choose image...')}}</label>--}}
{{--                                                    @if($errors->has('image'))--}}
{{--                                                        <div class="text text-danger mr-5">--}}
{{--                                                            {{$errors->first('image')}}--}}
{{--                                                        </div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group mt-4 text-left">--}}
{{--                                                <img src="{{asset('images/default/user.png')}}"--}}
{{--                                                     alt="Not Found!" id="img_profile" class="img-thumbnail user-profile"/>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="col-md-7 col-sm-12 col-lg-7 ">
                                            <div class="form-group">
                                                <label for="role">{{__('Role') }}</label>
                                                <select class="form-control change-role selectric" id="role" name="role">
                                                    <option selected disabled> {{__('Select Role')}} </option>
                                                    @foreach($roles as $value)
                                                        <option value="{{ $value->id }}" {{ old('role') == $value->id ? 'selected' : (@$user->role_id == $value->id ? 'selected' : '') }}>
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('role'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('role')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="table table-striped table-md col-md-12">
                                                <table class="table table-striped role-create-table role-permission"
                                                       id="permissions-table">
                                                    <thead>
                                                    <tr class="bg-info  text-white">
                                                        <th scope="col">{{__('Module') }}/{{__('Sub-module') }}</th>
                                                        <th scope="col">{{__('Permissions') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="role-permissions">
                                                    @foreach ($permissions as $permission)
                                                        <tr>
                                                            <td>
                                                            <span
                                                                class="text-capitalize">{{ ($permission->attribute) }}</span>
                                                            </td>
                                                            <td>
                                                                @foreach ($permission->keywords as $key => $keyword)
                                                                    <div class="custom-control custom-checkbox">
                                                                        @if ($keyword != '')
                                                                            @if(old('permissions'))
                                                                                <input type="checkbox"
                                                                                       class="custom-control-input read common-key"
                                                                                       id="{{ $keyword }}"
                                                                                       name="permissions[]"
                                                                                       value="{{ $keyword }}"
                                                                                    {{ in_array($keyword, old('permissions')) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                       for="{{ $keyword }}">{{ __($key) }}</label>
                                                                            @else
                                                                                <input type="checkbox"
                                                                                       class="custom-control-input read common-key"
                                                                                       id="{{ $keyword }}"
                                                                                       name="permissions[]"
                                                                                       value="{{ $keyword }}">
                                                                                <label class="custom-control-label"
                                                                                       for="{{ $keyword }}">{{ __($key) }}</label>
                                                                            @endif
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-outline-primary"
                                                        tabindex="4">{{__('Add')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

        function updateProfile(){
            alert("dgfdg")
        }

        jQuery(function ($){
            $(".image_pick").on("change", function () {
                var image_for = $(this).attr('data-image-for');
                readURL(this, image_for);
            });
        })
    </script>
@endsection
