{{--@if(Session::has('info'))--}}
{{--    <script type="text/javascript">--}}
{{--        "use strict";--}}
{{--        Swal.fire('{{Session::get('info')}}');--}}
{{--    </script>--}}

{{--@elseif(Session::has('success'))--}}
{{--    <script type="text/javascript">--}}
{{--        "use strict";--}}
{{--        Swal.fire('{{Session::get('success')}}');--}}
{{--    </script>--}}

{{--@elseif(Session::has('warning'))--}}
{{--    <script>--}}
{{--        "use strict";--}}
{{--        Swal.fire('{{Session::get('warning')}}');--}}
{{--    </script>--}}

{{--@elseif(Session::has('message'))--}}
{{--    <script>--}}
{{--        "use strict";--}}
{{--        Swal.fire('{{Session::get('message')}}');--}}
{{--    </script>--}}
{{--@endif--}}
