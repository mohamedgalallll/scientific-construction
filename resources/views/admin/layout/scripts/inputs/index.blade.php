<script>
    $(document).ready(function () {
        // $('.pickadateInput').pickadate({
        //     autoclose: true,
        //     todayHighlight: true,
        //     format: 'yyyy-mm-dd',
        // });

        tail.DateTime(".pickadateInput", {
            animate: true,
            closeButton: true,
            rtl: "auto",
            startOpen: false,
            stayOpen: false,
            dateFormat: "yyyy-mm-dd",
            timeFormat: false,
        });

        tail.DateTime(".TimePicker", {
            animate: true,
            closeButton: true,
            rtl: "auto",
            startOpen: false,
            stayOpen: false,
            dateFormat: false,
            timeFormat: "HH:ii",
            timeSeconds: false,
        });

        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });

        $('.dropify').dropify();


        $('.mySummernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            placeholder: '',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
    $(function () {
        $("body").tooltip({
            selector: '[data-toggle="tooltip"]',
            container: 'body'
        });
    })


</script>
