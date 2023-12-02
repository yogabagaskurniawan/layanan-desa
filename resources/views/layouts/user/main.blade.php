<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Desa Satu</title>
<link rel="stylesheet" type="text/css" href="{{ asset('user/styles/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/bootstrap-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('user/styles/style.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user/app/icons/icon-192x192.png') }}"></head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<!-- Page Wrapper-->
<div id="page">

    <!-- Footer Bar -->
    <div id="footer-bar" class="footer-bar-1 footer-bar-detached">
        <a href="page-wallet.html"><i class="bi bi-wallet2"></i><span>Cards</span></a>
        <a href="page-activity.html"><i class="bi bi-graph-up"></i><span>Activity</span></a>
        <a href="index-waves.html" class="circle-nav-2"><i class="bi bi-house-fill"></i><span>Home</span></a>
        <a href="page-payments.html"><i class="bi bi-receipt"></i><span>Payments</span></a>
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"><i class="bi bi-three-dots"></i><span>More</span></a>
    </div>

    <!-- Page Content - Only Page Elements Here-->
    <div class="page-content footer-clear">

        <!-- Page Title-->
        <div class="pt-3">
            <div class="page-title d-flex">
                <div class="align-self-center me-auto">
                    <p class="color-black opacity-80 header-date"></p>
                    <h1 class="color-black">Welcome</h1>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-highlights" class="icon bg-white color-theme rounded-m shadow-xl">
                        <i class="bi bi-palette-fill color-black font-16"></i>
                    </a>
                    {{-- <a href="#"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#menu-notifications"
                    class="icon bg-white color-theme shadow-bg shadow-bg-xs rounded-m">
                        <i class="bi bi-bell-fill font-17"></i>
                        <em class="badge bg-red-dark color-white scale-box">3</em>
                    </a> --}}
                    <a href="#"
                    data-bs-toggle="dropdown"
                    class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                        <img src="{{ asset('user/images/pictures/25s.jpg') }}" width="45" class="rounded-m" alt="img">
                    </a>
                    <!-- Page Title Dropdown Menu-->
                    <div class="dropdown-menu">
                        <div class="card card-style shadow-m mt-1 me-1">
                            <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                                <a href="page-wallet.html" class="list-group-item">
                                    <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                                    <strong class="font-13">Wallet</strong>
                                </a>
                                <a href="page-activity.html" class="list-group-item">
                                    <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                                    <strong class="font-13">Activity</strong>
                                </a>
                                <a href="page-profile.html" class="list-group-item">
                                    <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                                    <strong class="font-13">Account</strong>
                                </a>
                                <a href="page-signin-1.html" class="list-group-item">
                                    <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                    <strong class="font-13">Log Out</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Card Slider-->
        {{-- <div class="splide single-slider slider-no-dots slider-no-arrows slider-visible" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card card-style m-0 bg-5 shadow-card shadow-card-m" style="height:200px">
                            <div class="card-top p-3">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                            </div>
                            <div class="card-center">
                                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                    <h1 class="font-13 my-n1">
                                        <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Click for Balance</a>
                                    </h1>
                                    <div class="collapse" id="balance3"><h2 class="color-theme font-26">$26,315</h2></div>
                                </div>
                            </div>
                            <strong class="card-top no-click font-12 p-3 color-white font-monospace">Main Account</strong>
                            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong>
                            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong>
                            <div class="card-overlay bg-black opacity-50"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style m-0 bg-9 shadow-card shadow-card-m" style="height:200px">
                            <div class="card-top p-3">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                            </div>
                            <div class="card-center">
                                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                    <h1 class="font-13 my-n1">
                                        <a class="color-theme" data-bs-toggle="collapse" href="#balance1" aria-controls="balance1">Click for Balance</a>
                                    </h1>
                                    <div class="collapse" id="balance1"><h2 class="color-theme font-26">$65,500</h2></div>
                                </div>
                            </div>
                            <strong class="card-top no-click font-12 p-3 color-white font-monospace">Company Account</strong>
                            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong>
                            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong>
                            <div class="card-overlay bg-black opacity-50"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style m-0 bg-7 shadow-card shadow-card-m" style="height:200px">
                            <div class="card-top p-3">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                            </div>
                            <div class="card-center">
                                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                    <h1 class="font-13 my-n1">
                                        <a class="color-theme" data-bs-toggle="collapse" href="#balance2" aria-controls="balance2">Click for Balance</a>
                                    </h1>
                                    <div class="collapse" id="balance2"><h2 class="color-theme font-26">$15,100</h2></div>
                                </div>
                            </div>
                            <strong class="card-top no-click font-12 p-3 color-white font-monospace">Savings Account</strong>
                            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong>
                            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong>
                            <div class="card-overlay bg-black opacity-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Quick Actions -->
        {{-- <div class="content py-2">
            <div class="d-flex text-center">
                <div class="me-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-green-dark bi bi-arrow-up-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Transfer</h6>
                </div>
                <div class="m-auto">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-red-dark bi bi-arrow-down-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Request</h6>
                </div>
                <div data-bs-toggle="offcanvas" data-bs-target="#menu-exchange" class="m-auto">
                    <a href="#" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-blue-dark bi bi-arrow-repeat"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Exchange</h6>
                </div>
                <div class="ms-auto">
                    <a href="page-payment-bill.html" class="icon icon-xxl rounded-m bg-theme shadow-m"><i class="font-28 color-brown-dark bi bi-filter-circle"></i></a>
                    <h6 class="font-13 opacity-80 font-500 mb-0 pt-2">Bills</h6>
                </div>
            </div>
        </div> --}}

        <!-- Recent Activity Title-->
        {{-- <div class="content my-0 mt-n2 px-1">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Recent Activity</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="page-activity.html" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div> --}}

        <!-- Recent Activity Cards-->
        {{-- <div class="card card-style">
            <div class="content">
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-s"><i class="bi bi-google color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Google Ads</h5>
                        <p class="mb-0 font-11 opacity-50">14th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$150.55</h4>
                        <p class="mb-0 font-11">Bill Payment</p>
                    </div>
                </a>
                <div class="divider my-2 opacity-50"></div>
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-s"><i class="bi bi-caret-up-fill color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Bitcoin</h5>
                        <p class="mb-0 font-11 opacity-50">14th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-blue-dark">+0.315%</h4>
                        <p class="mb-0 font-11">Stock Update</p>
                    </div>
                </a>
                <div class="divider my-2 opacity-50"></div>
                <a href="page-activity.html" class="d-flex py-1">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-yellow shadow-bg shadow-bg-s"><i class="bi bi-pie-chart-fill color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Dividends</h5>
                        <p class="mb-0 font-11 opacity-50">13th March <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-green-dark">$950.00</h4>
                        <p class="mb-0 font-11">Wire Transfer</p>
                    </div>
                </a>
            </div>
        </div> --}}

        <!-- Account Activity Title-->
        {{-- <div class="content my-0 mt-n2 px-1">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Account Activity</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="page-activity.html" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div> --}}

        <!--Account Activity Notification-->
        {{-- <div class="card card-style gradient-green shadow-bg shadow-bg-s">
            <div class="content">
                <a href="page-activity.html" class="d-flex">
                    <div class="align-self-center">
                        <h1 class="mb-0 font-40"><i class="bi bi-check-circle color-white pe-3"></i></h1>
                    </div>
                    <div class="align-self-center">
                        <h5 class="color-white font-700 mb-0 mt-0 pt-1">
                            Withdrawal of funds to your <br> Account has been successful.
                        </h5>
                    </div>
                    <div class="align-self-center ms-auto">
                        <i class="bi bi-arrow-right-short color-white d-block pt-1 font-20 opacity-50"></i>
                    </div>
                </a>
            </div>
        </div> --}}

        <!-- Send Money Title-->
        {{-- <div class="content mb-0">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Send Money</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="page-payment-transfer.html" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div> --}}

        <!-- Send Money Slider-->
        {{-- <div class="splide quad-slider slider-no-dots slider-no-arrows slider-visible text-center" id="double-slider-2">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0  bg-1 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Johnatan</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0  bg-6 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Alexandra</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0 bg-3 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Juanita</h6>
                    </div>
                    <div class="splide__slide">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-friends-transfer" data-card-height="60" class="card border-0 bg-9 shadow-card shadow-card-m rounded-m"></a>
                        <h6 class="pt-2 font-600">Danielle</h6>
                    </div>
                </div>
            </div>
        </div> --}}
        @yield('content')
    </div>
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <!-- Main Sidebar Menu -->
    <div id="menu-sidebar" data-menu-active="nav-welcome" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
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
    
    <!-- Card Menu More -->
    <div id="menu-card-more" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        @include('layouts.user.partials.menu-card-settings')
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

	<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
		   <div class="content">
		   <img src="{{ asset('user/app/icons/icon-128x128.png') }}" alt="img" width="80" class="rounded-m mx-auto my-4">
			  <h1 class="text-center">Install PayApp</h1>
			  <p class="boxed-text-xl">
				  Install PayApp on your home screen, and access it just like a regular app. Open your Safari menu and tap "Add to Home Screen".
			  </p>
			   <a href="#" class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2" data-bs-dismiss="offcanvas">Maybe Later</a>
		   </div>
	   </div>

	   <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
		   <div class="content">
			   <img src="{{ asset('user/app/icons/icon-128x128.png') }}" alt="img" width="80" class="rounded-m mx-auto my-4">
			   <h1 class="text-center">Install PayApp</h1>
			   <p class="boxed-text-l">
				   Install PayApp to your Home Screen to enjoy a unique and native experience.
			   </p>
			   <a href="#" class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add to Home Screen</a><br>
			   <a href="#" data-bs-dismiss="offcanvas" class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe later</a>
		   </div>
	   </div>

</div>
<!-- End of Page ID-->

<script src="{{ asset('user/scripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/scripts/custom.js') }}"></script>
</body>