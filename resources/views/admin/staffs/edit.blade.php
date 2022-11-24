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

            <div class="container  py-5">
                <div class="row">
                    <div class="col-sm-xs-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div class="d-block">
                                        <h4 class="section-title fw-bold text-primary">{{ __('Edit Staff') }}</h4>
                                    </div>
                                    <div class="buttons add-button">
                                        <a href="{{ route('admin.staffs') }}" class="btn btn-icon icon-left btn-outline-primary"> <i
                                                class='fa fa-arrow-left'></i>{{__(' Back')}}</a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('admin.staffs.update' ,$user->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
{{--                                @method('put')--}}
{{--                                <input type="hidden" name="id" value="{{ $user->id }}" class="form-control"/>--}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="first_name"> {{__('First Name')}} *</label>
                                                <input type="text" name="first_name" id="first_name"
                                                       value="{{ old('first_name') ? old('first_name') : $user->first_name }}"
                                                       class="form-control" required
                                                       placeholder="{{__('First Name')}}">
                                                @if($errors->has('first_name'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('first_name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">{{__('Last Name')}} *</label>
                                                <input type="text" id="last_name" name="last_name"
                                                       value="{{ old('last_name') ? old('last_name') : $user->last_name }} "
                                                       class="form-control" required
                                                       placeholder="{{__('Last Name')}}">
                                                @if($errors->has('last_name'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('last_name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">{{__('Phone')}} </label>
                                                <input type="tel" id="phone" name="phone"
                                                       value="{{old('phone') ? old('phone') : $user->phone}}"
                                                       class="form-control" placeholder="{{__('Phone')}}"/>
                                                @if($errors->has('phone'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('phone')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth"> {{__('Date of Birth')}} </label>
                                                <input type="date" name="date_of_birth" id="date_of_birth" value="{{$user->date_of_birth}}"
                                                       class="form-control"/>
                                                @if($errors->has('date_of_birth'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('date_of_birth')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="gender"> Gender </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }} />
                                                    <label class="form-check-label" for="gender"> {{__('Male')}}</label>

                                                    <input class="form-check-input ml-4" type="radio" name="gender" id="gender" value="2" {{ $user->gender == 2 ? 'checked' : '' }} />
                                                    <label class="form-check-label ml-5" for="gender"> {{__('Female')}}</label>

                                                    <input class="form-check-input ml-4" type="radio" name="gender" id="gender" value="0" {{ $user->gender == 0 || $user->gender == 'null' ? 'checked' : '' }}/>
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
                                            {{--                                            <input type="text" name="username" id="username" class="form-control"--}}
                                            {{--                                                   placeholder="{{__('Enter Username')}}"--}}
                                            {{--                                                   value="{{old('username') ? old('username') : $user->username }}"--}}
                                            {{--                                                   required/>--}}
                                            {{--                                            @if($errors->has('username'))--}}
                                            {{--                                                <div class="text text-danger">--}}
                                            {{--                                                    {{$errors->first('username')}}--}}
                                            {{--                                                </div>--}}
                                            {{--                                            @endif--}}
                                            {{--                                        </div>--}}
                                            <div class="form-group">
                                                <label for="email">{{__('Email')}} *</label>
                                                <input type="text" name="email" id="email" class="form-control"
                                                       value="{{old('email') ? old('email') : $user->email}}" placeholder="{{__("Email")}}" required/>
                                                @if($errors->has('email'))
                                                    <div class="text text-danger">
                                                        {{$errors->first('email')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="password">{{__('Password')}} </label>
                                                <input type="password" name="password" id="password" class="form-control"
                                                       placeholder="{{__('Password')}}">
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
                                            @if($user->image !== '' && ($user->image))
                                                <div class="form-group mt-4 text-left">
                                                    <img src="{{asset('images/'.$user->image) }}"
                                                         alt="" id="img_profile" class="img-thumbnail user-profile" height="128" width="128" />
                                                </div>
                                            @else
                                                <div class="form-group mt-4 text-left">
                                                    <img src="{{asset('images/user.jpg')}}" alt="" id="img_profile" class="img-thumbnail user-profile" height="128" width="128"/>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body card-body-padding">
                                            <div class="form-group">
                                                <label for="role">{{ __('Role') }}</label>
                                                <select class="form-control change-role selectric" id="role" name="role">
                                                    <option value="">{{ __('Select') }} {{ __('Role') }}</option>
                                                    @foreach ($roles as $role)
                                                        <option
                                                            value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : ($user->role_id == $role->id ? 'selected' : '') }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="table table-striped table-md col-md-12">
                                                <table class="table table-striped role-create-table role-permission"
                                                       id="permissions-table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">{{__('Module') }}/{{ __('Sub-module') }}</th>
                                                        <th scope="col">{{__('Permissions') }}</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody id="role-permissions">

                                                    @foreach ($permissions as $permission)
                                                        <tr>
                                                            <td><span class="text-capitalize">{{ __($permission->attribute) }}</span>
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
                                                                                <label class="custom-control-label" style=""
                                                                                       for="{{ $keyword }}">{{ __($key) }}</label>
                                                                            @else
                                                                                <input type="checkbox"
                                                                                       class="custom-control-input read common-key"
                                                                                       id="{{ $keyword }}"
                                                                                       name="permissions[]"
                                                                                       value="{{ $keyword }}"
                                                                                    {{ $user->permissions ? (in_array($keyword, @$user->permissions) ? 'checked' : '') : '' }}>
                                                                                <label class="custom-control-label" style=""
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
                                                <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                                    {{__('Update')}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
