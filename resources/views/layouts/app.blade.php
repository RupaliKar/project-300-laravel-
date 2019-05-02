<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mu-Booster</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bicon.min.css')}}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/responsive.css')}}" media="all" />
    @yield('style')

</head>
<body>
    @include('shared.app_nav')

    @yield('content')

    @include('shared.footer')
    <!-- LinkUp Js -->
    <script type="text/javascript" src="{{asset('public/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/onepagenav.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/waypoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/ityped.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/active.js')}}"></script>
    @yield('script')
</body>
</html>
