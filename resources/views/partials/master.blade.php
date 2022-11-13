<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')
    <title>@yield('title')</title>
    @include('partials.header-assets')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('partials.header')
{{--            @yield('body')--}}
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            @include('partials.footer')
        </div>
    </div>
    @include('partials.footer-assets')
    @include('partials.message')
{{--    @if(Session::has('message'))--}}
{{--        <script type="text/javascript">--}}
{{--            $(document).ready(function (){--}}
{{--                toastr.error('{{Session::get('message')}}');--}}
{{--            })--}}
{{--        </script>--}}
{{--    @endif--}}
    @yield('modal')

</body>
</html>
