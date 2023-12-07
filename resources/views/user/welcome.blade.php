@extends('layouts.user.main')

@section('content')

    <svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
        <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
        <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
        <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
    </svg>
@include('layouts.user.partials.footer-bar')

<div class="page-content footer-clear">

        <!-- Card Stack - The Stack Height Below will be the card height-->
        <div class="card-stack" data-stack-height="180">
           
            <!-- Card Open on Click-->
            <div class="card-stack-click"></div>
            
            <!-- Card 1-->
            <div class="card card-style bg-5" style="height: 200px; margin-bottom: -180px; z-index: 70; transform: scale(0.99);">
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
            
            <!-- Card 2 -->
            <div class="card card-style bg-7" style="height: 200px; margin-bottom: -180px; z-index: 69; transform: scale(0.89);">
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
            
            <!-- Card 3 -->
            <div class="card card-style bg-1" style="height: 200px; margin-bottom: -180px; z-index: 68; transform: scale(0.79);">
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
        
        <!-- Card Stack Info Message / Hides when deployed -->
        <h6 class="btn-stack-info color-theme opacity-80 text-center mt-n2 mb-3">Tap the Cards to Expand your Wallet</h6>
        <!-- Card Stack Button / shows when deployed -->
        <a href="#" class="disabled btn-stack-click btn mx-3 mb-4 btn-full gradient-highlight shadow-bg shadow-bg-xs">Close my Wallet</a>

        
        {{-- <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-4">
                            <a href="/all-marketplace">
                                <div class="feature-card mx-auto text-center">
                                    <div class="rounded-circle overflow-hidden mx-auto bg-gray" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('user/images/assetMenu/marketplace.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <p class="mb-0">Marketplace</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/umkm">
                                <div class="feature-card mx-auto text-center">
                                    <div class="rounded-circle overflow-hidden mx-auto bg-gray" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('user/images/assetMenu/umkm.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <p class="mb-0">Umkm</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/layanan">
                                <div class="feature-card mx-auto text-center">
                                    <div class="rounded-circle overflow-hidden mx-auto bg-gray" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('user/images/assetMenu/layanan.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <p class="mb-0">Layanan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <hr>
                        <a href="/menu" class="btn btn-xxs btn-success">Semua Menu</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container direction-rtl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-3">
                            <a href="/all-marketplace">
                                <div class="feature-card mx-auto text-center">
                                    <img src="{{ asset('user/images/assetMenu/marketplace.png') }}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                    <p class="mb-0">Marketplace</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="/umkm">
                                <div class="feature-card mx-auto text-center">
                                    <img src="{{ asset('user/images/assetMenu/umkm.png') }}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                    <p class="mb-0">Umkm</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="/layanan">
                                <div class="feature-card mx-auto text-center">
                                    <img src="{{ asset('user/images/assetMenu/layanan.png') }}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                    <p class="mb-0">Layanan</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="/loker">
                                <div class="feature-card mx-auto text-center">
                                    <img src="{{ asset('user/images/assetMenu/loker.png') }}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                    <p class="mb-0">Loker</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <hr>
                        <a href="/menu" class="btn btn-xxs bg-mint-dark">Semua Menu</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <img src="{{ asset('user/images/desasatu.png')}}" class="img-fluid mx-auto d-block mt-4" style="width: 550px; height: auto;">
            <div class="content pb-0">
                <h3>Tentang Desa Satu</h3>
                <ul>
                    <li>
                        <p>Asal usul nama DESA SATU Menurut kamus Kawi-Indonesia karangan Prof. Drs. Wojowasito, 
                            Batang berarti : (1) Plataran, (2) Tempat yang dipertinggi, (3) Dialahkan, (4) Kata bantu bilangan.
                            Dalam bahasa Indonesia (juga bahasa Melayu) berarti sungai, dalam kamus jawa- Indonesia karangan 
                            Prawiroatmojo berarti terka, tebak. Atas dasar arti kata tersebut diatas maka dalam hubungan alami
                            yang ada dilokasi yang ada disekarang ini maka yang agak tepat adalah: plataran (platform) yang agak
                            ketinggian dibandingkan dengan dataran disekitarnya maupun bila dilihat dari puncak pegunungan di sekitarnya
                            juga bila dipandang dari laut jawa.
                            Menurut legenda yang sangat populer, Batang berasal dari kata = Ngembat - Watang
                            yang berarti mengangkat batang kayu. Hal ini diambil dari peristiwa kepahlawanan Ki Ageng Bahurekso, yang dianggap dari
                            cikal bakal Batang.
                        </p>
                        <hr>
                        <p>Alamat Balai Desa : Desa Tulis Kecamatan Tulis Kabupaten Batang</p>
                    </li>
                </ul>
            </div>
        </div>
</div>

@endsection