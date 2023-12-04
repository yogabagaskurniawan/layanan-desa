@extends('layouts.user.main')

@section('content')
<svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
    <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
    <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
    <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
    <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
</svg>
@include('layouts.user.partials.footer-bar')
<!-- Main Card Slider-->
<div class="splide single-slider slider-no-dots slider-no-arrows slider-visible" id="single-slider-1">
    <div class="splide__track">
        <div class="splide__list">
            <div class="splide__slide">
                <a href="https://desasatu.404official.com/">
                    <div class="card card-style m-0 shadow-card shadow-card-m" style="height:200px; background-image: url('{{ asset('user/images/pictures/iklan1.jpeg') }}')">
                        {{-- <div class="card-top p-3"> --}}
                            {{-- <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a> --}}
                        {{-- </div> --}}
                        {{-- <div class="card-center">
                            <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                <h1 class="font-13 my-n1">
                                    <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Click for Balance</a>
                                </h1>
                                <div class="collapse" id="balance3"><h2 class="color-theme font-26">$26,315</h2></div>
                            </div>
                        </div> --}}
                        {{-- <strong class="card-top no-click font-12 p-3 color-white font-monospace">Main Account</strong> --}}
                        {{-- {{-- <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong> --}} 
                        {{-- {{-- <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong> --}}
                        <div class="card-overlay opacity-50"></div>
                    </div>
                </a>
            </div>
            <div class="splide__slide">
                <a href="https://desasatu.404official.com/">
                    <div class="card card-style m-0 shadow-card shadow-card-m" style="height:200px; background-image: url('{{ asset('user/images/pictures/iklan2.jpeg') }}')"">
                        {{-- <div class="card-top p-3"> --}}
                            {{-- <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a> --}}
                        {{-- </div> --}}
                        {{-- <div class="card-center">
                            <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                <h1 class="font-13 my-n1">
                                    <a class="color-theme" data-bs-toggle="collapse" href="#balance1" aria-controls="balance1">Click for Balance</a>
                                </h1>
                                <div class="collapse" id="balance1"><h2 class="color-theme font-26">$65,500</h2></div>
                            </div>
                        </div> --}}
                        {{-- {{-- <strong class="card-top no-click font-12 p-3 color-white font-monospace">Company Account</strong> --}}
                        {{-- {{-- <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong> --}}
                        {{-- {{-- <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong> --}}
                        <div class="card-overlay opacity-50"></div>
                    </div>
                </a>
            </div>
            <div class="splide__slide">
                <a href="https://desasatu.404official.com/">
                    <div class="card card-style m-0 shadow-card shadow-card-m" style="height:200px; background-image: url('{{ asset('user/images/pictures/iklan1.jpeg') }}')"">
                        {{-- <div class="card-top p-3"> --}}
                            {{-- <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a> --}}
                        {{-- </div> --}}
                        {{-- <div class="card-center">
                            <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                                <h1 class="font-13 my-n1">
                                    <a class="color-theme" data-bs-toggle="collapse" href="#balance2" aria-controls="balance2">Click for Balance</a>
                                </h1>
                                <div class="collapse" id="balance2"><h2 class="color-theme font-26">$15,100</h2></div>
                            </div>
                        </div> --}}
                        {{-- {{-- <strong class="card-top no-click font-12 p-3 color-white font-monospace">Savings Account</strong> --}}
                        {{-- {{-- <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong> --}}
                        {{-- <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong> --}}
                        <div class="card-overlay opacity-50"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row text-center" style="margin: 60px 4px 0 4px">
    <div class="col-4 mb-4 ">
        <a href="/marketplace" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-arrow-clockwise font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/marketplace.png') }}" alt="img marketplace">
                <h3 class="font-16 pt-3">Marketplace</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/informasi" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-receipt font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/informasi.png') }}" alt="img informasi">
                <h3 class="font-16 pt-3">Informasi</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/kurir" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/kurir.png') }}" alt="imag kurir">
                <h3 class="font-16 pt-3">Kurir</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/umkm" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/umkm.png') }}" alt="imag umkm">
                <h3 class="font-16 pt-3">Umkm</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/loker" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/loker.png') }}" alt="imag loker">
                <h3 class="font-16 pt-3">Loker</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/wisata" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/wisata.png') }}" alt="imag wisata">
                <h3 class="font-16 pt-3">Wisata</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/layanan" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/layanan.png') }}" alt="imag layanan">
                <h3 class="font-16 pt-3">Layanan</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/bumdes" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/marketplace.png') }}" alt="imag bumdes">
                <h3 class="font-16 pt-3">Bumdes</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/jasa" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/jasa.png') }}" alt="imag jasa">
                <h3 class="font-16 pt-3">Jasa</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/masukan" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/masukan.png') }}" alt="imag masukan">
                <h3 class="font-16 pt-3">Masukan</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/buat-surat" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/berkas.png') }}" alt="imag buat-surat">
                <h3 class="font-16 pt-3">Buat surat</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/simpedes" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/simpedes.png') }}" alt="imag simpedes">
                <h3 class="font-16 pt-3">Simpedes</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/bank-sampah" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/bank-sampah.png') }}" alt="imag bank sampah">
                <h3 class="font-16 pt-3">B-sampah</h3>
            </div>
        </a>
    </div>
    <div class="col-4 mb-4 ">
        <a href="/desa-lain" class="card card-style m-0" style="height:130px;">
            <div class="card-center">
                {{-- <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span> --}}
                <img class="icon icon-xl rounded-m  shadow-bg shadow-bg-xs" src="{{ asset('user/images/assetMenu/desa.png') }}" alt="imag desa-lain">
                <h3 class="font-16 pt-3">Desa lain</h3>
            </div>
        </a>
    </div>
</div>
@endsection