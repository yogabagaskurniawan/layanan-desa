@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/wisata" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
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
<div class="card card-style mx-0 rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('user/images/pictures/wisata2.jpeg') }}" class="img-fluid d-block m-auto" style="width: 432px; height: 432px; border-bottom-right-radius: 26px;border-bottom-left-radius: 26px">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('user/images/pictures/wisata3.jpeg') }}" class="img-fluid d-block m-auto" style="width: 432px; height: 432px; border-bottom-right-radius: 26px;border-bottom-left-radius: 26px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="content mt-0 mb-3">
        <h2 class="pt-3">Museum Sultan Mahmud Badaruddin</h2>
        <p class="mb-0 font-500 font-14">Jam Buka / Tutup : 21:21:00-21:21:00</p>
        <p class="mb-0 font-500 font-14">Tulis, Batang</p>
        <div class="divider mx-1 my-1"></div>
        <p class="mb-2 font-500 font-14">
            By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
        <p class="mb-2 font-500 font-14">
            LBy accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
    </div>
</div>
@endsection