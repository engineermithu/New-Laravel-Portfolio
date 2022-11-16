<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.meta')
    <title>@yield('title')</title>
    @include('admin.partials.header-assets')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.partials.header')
            @include('admin.partials.sidebar')
            <!-- Main Content -->
{{--            <div class="content-wrapper">--}}
                <div class="main-content">
                    @yield('content')
                </div>
{{--            </div>--}}
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.footer-assets')
    @include('admin.partials.message')
    @yield('modal')
    @yield('font-js')
    @if(Session::has('message'))
        <script type="text/javascript">
            $(document).ready(function (){
                toastr.success('{{Session::get('message')}}');
            })
        </script>
    @endif
</body>
</html>
