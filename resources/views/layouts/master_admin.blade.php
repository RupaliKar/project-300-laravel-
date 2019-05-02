<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Mu-Booster</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/fontawesome-all.min.css')}}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{asset('public/admin_asset/images/favicon.ico')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/jquery.dataTables.css')}}" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/bootstrap.min.css')}}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/style.css')}}" />
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/admin_asset/css/responsive.css')}}" media="all" />
    @yield('style')
</head>
<body>
        <!--Side Bar-->
        @include('shared.admin.sidebar')
        <!--Side Bar-->
<div class="admin_area">
    <div class="container-fluid no_padding">

        <!--header Right-->
        @include('shared.admin.header')
        <!--header Right-->

        @yield('content')

        @yield('box')
    </div>
</div>

<!-- LinkUp Js -->
<script type="text/javascript" src="{{asset('public/admin_asset/js/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin_asset/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin_asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin_asset/js/active.js')}}"></script>
@yield('script')
</body>
</html>