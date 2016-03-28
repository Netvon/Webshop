<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page_title }}</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="{{ asset('css/style.red.css') }}" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and ios/android icons-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon.ico/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon.ico/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon.ico/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.ico/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon.ico/apple-icon-114x114.png') }}ng">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon.ico/apple-icon-120x120.png') }}ng">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon.ico/apple-icon-144x144.png') }}ng">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon.ico/apple-icon-152x152.png') }}ng">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.ico/apple-icon-180x180.png') }}ng">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon.ico/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.ico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.ico/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.ico/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.ico/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('img/favicon.ico/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon.ico/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- owl carousel css -->

    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
</head>

<body>

    <div id="all">
        @include('arrow.header')

        @yield('content')

        @include('arrow.footer')
    </div>

</body>

</html>