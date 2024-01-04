<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Desa Satu</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('user/styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="manifest" href="{{ asset('user/_manifest.json') }}">
    <meta id="theme-check" name="theme-color" content="#FFFFFF">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user/images/pictures/logo.png') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{asset('user/images/pictures/logo.png')}}">
    @yield('css')
</head>

<body class="theme-light">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <!-- Page Wrapper-->
    <div id="page">

        {{-- @include('layouts.user.partials.footer-bar') --}}
        @yield('header')
        <!-- Page Content - Only Page Elements Here-->
        <div class="page-content " style="max-width: 1000px; margin: 0 auto;">

            @yield('content')

        </div>
        <!-- End of Page Content-->

        <!-- Off Canvas and Menu Elements-->
        <!-- Always outside the Page Content-->

        <!-- Main Sidebar Menu -->
        <div id="menu-sidebar" data-menu-active="nav-welcome"
            class="offcanvas offcanvas-start offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-sidebar')
        </div>

        <!-- Highlights Menu -->
        <div id="menu-highlights" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-highlights')
        </div>

        <!-- Notifications Bell -->
        <div id="menu-notifications" class="offcanvas offcanvas-top offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-notifications')
        </div>

        <!-- Transfer Button Menu -->
        <div id="menu-transfer" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-transfer')
        </div>

        <!-- Transfer Friends Menu -->
        <div id="menu-friends-transfer" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-friends-transfer')
        </div>

        <!-- Request Button Menu -->
        <div id="menu-request" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-request')
        </div>

        <!-- Exchange Button Menu -->
        <div id="menu-exchange" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
            @include('layouts.user.partials.menu-exchange')
        </div>

        {{-- <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
            <div class="content">
                <img src="{{ asset('user/app/icons/icon-128x128.png') }}" alt="img" width="80"
                    class="rounded-m mx-auto my-4">
                <h1 class="text-center">Install PayApp</h1>
                <p class="boxed-text-xl">
                    Install PayApp on your home screen, and access it just like a regular app. Open your Safari menu and
                    tap "Add to Home Screen".
                </p>
                <a href="#"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2"
                    data-bs-dismiss="offcanvas">Maybe Later</a>
            </div>
        </div>

        <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
            <div class="content">
                <img src="{{ asset('user/app/icons/icon-128x128.png') }}" alt="img" width="80"
                    class="rounded-m mx-auto my-4">
                <h1 class="text-center">Install PayApp</h1>
                <p class="boxed-text-l">
                    Install PayApp to your Home Screen to enjoy a unique and native experience.
                </p>
                <a href="#"
                    class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add
                    to Home Screen</a><br>
                <a href="#" data-bs-dismiss="offcanvas"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe
                    later</a>
            </div>
        </div> --}}

    </div>
    <!-- End of Page ID-->

    <script src="{{ asset('user/scripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/scripts/custom.js') }}"></script>
    @yield('script')
</body>
