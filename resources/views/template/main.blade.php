<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="" content="" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <!-- Page Title  -->
    <title> @yield('title') - UuzBot</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/editors/summernote.css')}}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @livewireStyles
    @livewireScripts
</head>

<body class="nk-body npc-apps apps-only has-apps-sidebar dark-mode" theme="dark">
    <div class="nk-app-root">
        @include('template.navigation')
        <div class="nk-main">
            <div class="nk-wrap">
                @include('template.header')
                <div class="nk-sidebar" data-content="sidebarMenu"></div>
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset ('assets/js/libs/editors/summernote.js')}}"></script>
    <script src="{{asset('assets/js/editors.js')}}"></script>


</body>

</html>
