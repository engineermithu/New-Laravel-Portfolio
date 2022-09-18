<!-- CORE PLUGINS -->
<script src="{{asset('/admin-assets')}}/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS -->
<script src="{{asset('/admin-assets')}}/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets') }}/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
<script src="{{ asset('/admin-assets/') }}/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('.summernote').summernote();
        $('.summernote_air').summernote({
            airMode: true
        });
    });
</script>
<!-- CORE SCRIPTS-->
<script src="{{asset('/admin-assets')}}/js/app.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/js/toastr.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/js/iziToast.min.js" type="text/javascript"></script>
<script src="{{asset('/admin-assets')}}/js/app.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS-->
<script src="{{asset('/admin-assets')}}/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- PAGE LEVEL SCRIPTS-->
<script type="text/javascript">
    $(function() {
        $('#login-form').validate({
            errorClass: "help-block",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
        });
    });
</script>

@yield('admin-js');
