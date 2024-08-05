
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta https-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
@if(config('app.is_index'))
    <meta name="robots" content="index,follow"/>
@else
    <meta name="robot" content="noindex"/>
    <meta name="AdsBot-Google" content="noindex"/>
@endif

<title>{{config("app.title")}}</title>
<meta name="description" content=" {{config('app.descriptions')}}" />

<meta name="copyright" content="Huong Dang" />
<meta name="author" content="Huong Dang" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name="revisit-after" content="1 days" />
<meta name="generator" content="Huong Dang" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

{{-- <link rel="stylesheet" href="/template/home/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/template/home/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href ="/template/home/css/main.css"> --}}

<link rel="stylesheet" href="/template/home/css/bootstrap-reboot.min.css"/>
<link rel="stylesheet" href="/template/home/css/bootstrap-grid.min.css"/>
<link rel="stylesheet" href="/template/home/vendor/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="/template/home/css/style.css">
<link rel="stylesheet" href="/template/home/css/custom.css">

{{-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> --}}
@include('home.style')
<meta name="csrf-token" content="{{csrf_token()}}">
@yield('head')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KNSX53');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LJMLF8LB33"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LJMLF8LB33');
</script>
