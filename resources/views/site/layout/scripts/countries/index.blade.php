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
