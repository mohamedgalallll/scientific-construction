<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="{{$settings->site_description}}">
    <meta name="keywords" content="{{$settings->site_key_words}}">
    <meta name="author" content="Vector|01118065363">
    <title>@yield('title',$settings->site_title)</title>
    <link rel="apple-touch-icon" href="{{$settings->main_icon}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{$settings->main_icon}}">
    <!-- END: Styles CSS-->
    <link rel="stylesheet" href="{{url('design/site/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{url('design/site/css/all.css')}}"/>
    <link rel="stylesheet" href="{{url('design/site/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{url('design/site/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('design/admin/css/plugins/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('design/admin/vendors/css/extensions/toastr.css')}}">
    <link rel="stylesheet" href="{{url('design/site/css/summernote.min.css')}}">
    <link rel="stylesheet" href="{{url('design/site/css/video-js.css')}}">

    <link rel="stylesheet" href="{{url('design/site/css/style.css')}}"/>
    @yield('main_css')
</head>
