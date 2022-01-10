<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('./images/favicon.png') }}">
    <!-- Page Title  -->
    <title> @yield('title') - UuzBot</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('landing/css/dashlite.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('landing/css/theme.css')}}" />

</head>

<body class="nk-body bg-white npc-landing">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('landing.layouts.l-header')
            @yield('landing')
            @include('landing.layouts.l-footer')
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->

    <script src="{{ asset('landing/js/bundle.js')}}"></script>
    <script src="{{ asset('landing/js/scripts.js')}}"></script>

</body>


</html>
