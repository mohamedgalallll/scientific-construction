 @php
    $settings = \App\Model\Settings::first();
@endphp
    <!DOCTYPE html>
<html  >
@include('site.layout.header', ['settings' => $settings])
@include('site.layout.nav')
<body>
{{-- @include('site.layout.nav', ['settings' => $settings,'homeBackground'=>$homeBackground]) --}}
@yield('content')

@include('site.layout.footer')
</body>
</html>
