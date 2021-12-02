<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-placement="horizontal" data-behaviour="unpinned" data-layout="fluid" data-radius="rounded" data-color="light-purple" data-show="true" data-menu-animate='show'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TaxLocal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="{{ asset('css/theme/font/CS-Interface/style.css') }}" />
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ asset('css/theme/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme/vendor/OverlayScrollbars.min.css') }}" />

    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ asset('css/theme/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme/main.css') }}" />
    <!-- Template Base Styles End -->
    

    <style>
        @font-face {
            font-family: 'Sarabun-Bold';
            font-style: normal;
            font-weight: 700;
            src: url("{{ asset('fonts/Sarabun-Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'Sarabun-Regular';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('fonts/Sarabun-Regular.ttf') }}") format('truetype');
        }

        body {
            font-family: "Sarabun-Regular";
        }
    </style>

</head>
<body class="h-100">

    @yield('heading')

    <div id="app" class="h-100">
            
        @if(Request::path() != 'member/login')
            <main>
                <div class="container">

                    @yield('content')

                </div>
            </main>
        @else

            @yield('content')

        @endif
        
    </div>

    <script src="{{ asset('css/theme/font/CS-Line/csicons.min.js') }}"></script>
    <script src="{{ asset('js/theme/base/globals.js') }}"></script>
    <script src="{{ asset('js/theme/base/init.js') }}"></script>
    <script src="{{ asset('js/theme/base/nav.js') }}"></script>
    <script src="{{ asset('js/theme/base/loader.js') }}"></script>
    
    <script src="{{ asset('js/theme/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/clamp.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/chartjs-plugin-rounded-bar.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/glide.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/intro.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/theme/vendor/plyr.min.js') }}"></script>

</body>
</html>