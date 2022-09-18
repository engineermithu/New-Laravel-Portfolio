@extends('auth.master')

@section('title')
    Portfolio -Login Page
@endsection

@section('content')
    <div class="content">
        <div class="brand">
            <a class="link" href="{{ route('/') }}">Portfolio</a>
        </div>
        <form id="login-form" action="{{ route('login') }}" method="post">
            @csrf
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="bx bx-envelope"></i></div>
                    <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email" autocomplete="off"/>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.html">Forgot password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
            <div class="social-auth-hr">
                <span>Or login with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-github m-r-5" href="javascript:;"><i class="fa fa-github"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-google" href="javascript:;"><i class="fa fa-google"></i></a>
            </div>
{{--            <div class="text-center">Not a member?--}}
{{--                <a class="color-blue" href="register.html">Create accaunt</a>--}}
{{--            </div>--}}
        </form>
    </div>


    {{--<!-- BEGIN PAGA BACKDROPS-->--}}
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    {{--<!-- END PAGA BACKDROPS-->--}}
@endsection


