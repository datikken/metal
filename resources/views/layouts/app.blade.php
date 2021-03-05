<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if IE]>
    <meta http-equiv="x-ua-compatible" content="IE=9"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Металлообработка') }}</title>
    <meta name="description" content="Металлообработка"/>
    <meta name="keywords" content="Металлообработка"/>
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i, 600,700,800">
    <link rel="stylesheet" type="text/css" href="/vendor/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/vendor/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="font-sans antialiased">
    @include('components.header')
        @yield('content')
    @include('components.footer')
    @livewireScripts
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
