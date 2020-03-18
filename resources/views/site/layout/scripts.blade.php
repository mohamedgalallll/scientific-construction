<!-- BEGIN: Scripts JS-->
<script src="{{url('design/site/js/jquery.js')}}"></script>
<script src="{{url('design/site/js/popper.min.js')}}"></script>
<script src="{{url('design/site/js/bootstrap.min.js')}}"></script>
<script src="{{url('design/site/js/Carousel.js')}}"></script>
<script src="{{url('design/site/js/owl.carousel.min.js')}}"></script>
<script src="{{url('design/site/js/jquery.validate.min.js')}}"></script>
<script src="{{url('design/admin/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{url('design/admin/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{url('design/site/js/summernote.min.js')}}"></script>
<script src="{{url('design/site/js/video.js')}}"></script>

<script src="{{url('design/site/js/js.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#country_id').change(function () {
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    type: "GET",
                    url: "{{url('countries/getStates')}}?country_id=" + country_id,
                    success: function (res) {
                        if (res) {
                            $("#city_id").empty();
                            $("#city_id").append('<option value="" >قم بأختيار المدينه</option>');
                            $.each(res, function (key, value) {
                                $("#city_id").append('<option value="' + key + '">' + value + '</option>');
                            });

                        } else {
                            $("#city_id").empty();
                        }
                    }
                });
            } else {
                $("#city_id").empty();
            }
        });
    });
</script>
<!-- End Scripts JS-->
@yield('page_js')
<!-- END: inputs JS-->
@include('site.layout.scripts.index')
@yield('main_js')
