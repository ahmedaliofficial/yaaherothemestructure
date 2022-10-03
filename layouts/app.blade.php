@php
include '../config/app.php';    
@endphp
<!DOCTYPE html>
<html lang="{{ App::getlocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>One Eccomerce</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('themes'.$themename.'/assets/images/favicon.png')}}">
    <!-- All CSS is here
 ============================================ -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('themes'.$themename.'/assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes'.$themename.'/assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes'.$themename.'/assets/css/style.min.css')}}">

    @stack('css')

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--====== Main App ======-->

    <div id="main-wrapper">


        {{-- <x-widgets.alerts /> --}}

        {{-- load partials views --}}
        @include('themes.'.$themename.'.layouts.header')
        @yield('content')
        @include('themes.'.$themename.'.layouts.footer')

        {{-- end load --}}


    </div>
    <!--====== End - Main App ======-->
    <script src="{{asset('themes'.$themename.'/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('themes'.$themename.'/assets/js/plugins/plugins.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('themes'.$themename.'/assets/js/main.js')}}"></script>


    @stack('js')


    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>

</html>
