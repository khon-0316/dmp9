<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Main font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/appwork.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme-corporate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/main.css') }}">

</head>
<body>
<div class="nav_wrap">
    <div class="nav_inner clearfix">
        <div class="nav_logo">
            <img src="/img/main/logo_dmp_01.png" alt="DMP로고 (검정)">
        </div>
        <ul>
            @guest
                <li><a href="/sign_up_type">회원가입</a></li>
                <li><a href="{{ route('login') }}">로그인</a></li>
            @else
                <li></li>
            @endguest

        </ul>
    </div>
</div>

@yield('content')

<script src="{{ asset('js/layout-helpers.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/main/main.js') }}"></script>



@stack('scripts')
</body>
</html>
