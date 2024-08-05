<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body class="" style="@if(isset($style_body)){{$style_body}} @endif">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KNSX53"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('home.header')
<!-- ./wrapper -->
<div id="content">
    @yield('content')
    @include('home.footerview')
</div>
@include('home.footer')
</body>
</html>
