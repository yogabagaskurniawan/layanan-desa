@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/informasi" class="me-3 ms-3 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center">
            <a href="#" data-bs-toggle="dropdown" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bbi bi-share-fill color-theme font-14"></i>
            </a>
            <!-- Page Title Dropdown Menu-->
            <div class="dropdown-menu">
                <div class="card card-style shadow-m mt-1 me-1">
                    <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-facebook"></i>
                            <strong class="font-13">Facebook</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-teal shadow-bg shadow-bg-xs color-white rounded-xs bi bi-twitter"></i>
                            <strong class="font-13">Twitter</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-telegram"></i>
                            <strong class="font-13">Telegram</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-mint shadow-bg shadow-bg-xs color-white rounded-xs bi bi-whatsapp"></i>
                            <strong class="font-13">Whatsapp</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-style">
    <img src="http://127.0.0.1:8000/user\images\pictures\18w.jpg" class="img-fluid">
    <div class="content pb-0">
        <div class="text-center">
            <p class="mb-1">Selasa, 2 januari 2022</p>
            <p class="mb-1">Batang</p>
            <p class="mb-1">Desa Satu</p>
            {{-- <p class="mb-1">Alamat : Jl. Duren</p> --}}
        </div>
        <div class="divider mx-1 my-2"></div>
        <h3 class="text-center mb-1">Kumpulan Desa</h3>
        <p>By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.</p>
    </div>
</div>

<div class="card card-style">
    <div class="header-bar header-center shadow-m">
        <h2 class="m-auto">Informasi Lainnya</h2>
    </div>

        <div class="divider mx-4"></div>
        
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-informasi" class="color-theme" aria-controls="balance2">Lihat</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Gotong Royong</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Senin-3-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>

        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-informasi" class="color-theme" aria-controls="balance2">Lihat</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Sepak Bola</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Sabtu-4-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
    </div>
</div>

@endsection