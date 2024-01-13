@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')

<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/jasa" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
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

<div class="card card-style mx-0 mb-3 position-relative rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
    <img src="{{ asset('user/images/pictures/jasa.jpg') }}" class="card-img-top m-auto" style="height: 220px; max-width: 700px; border-bottom-right-radius: 20px;border-bottom-left-radius: 20px">
    <div class="logo-and-button">
        <div class="logo" style="position: absolute; top: 208px; left: 50%; transform: translate(-50%, -50%);">
            <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="100" style="height: 100px">
        </div>
    </div>
    <div class="content pb-0 mt-5 pt-2 mb-3">
        <h4 class="mb-0">Desa Satu</h4>
        <p class="mb-0 font-500 font-14">Tulis,Batang</p>
        <h3 class="font-200 mb-0 mb-3 font-16">RP. 400.000</h3>
        {{-- <div class="divider mx-1 my-1"></div> --}}
        {{-- <h4 class="mb-0">Fotografi</h4> --}}
        <h3 class="font-200">Fotografi</h3>
        <p class="font-500 font-14">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
            ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
            ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
        </p>
    </div>
</div>

<div class="content px-2">
    <h3 class="font-200 mb-3 ms-n2">Jasa Lainnya</h3>
    <div class="row mb-0">
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <a href="/detail-jasa" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                {{-- <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Elektronik</span> --}}
                <img src="{{ asset('user/images/pictures/jasa.jpg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                    alt=" card="" image"="">
                <div class="content pb-0 mx-2">
                    <h4 class="mb-0  text-truncate">Jasa Tukang</h4>
                    <h5  class="mb-0">Rp. 400.000</h5>
                    <p>Desa Satu,<span> Kota Batang</span></p>
                </div>
            </a>
        </div>
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <a href="/detail-jasa" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                {{-- <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Makanan</span> --}}
                <img src="{{ asset('user/images/pictures/jasa.jpg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                    alt=" card="" image"="">
                <div class="content pb-0 mx-2">
                    <h4 class="mb-0  text-truncate">Jasa Masak</h4>
                    <h5  class="mb-0">Rp. 400.000</h5>
                    <p>Desa Satu,<span> Kota Batang</span></p>
                </div>
            </a>
        </div>
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <a href="/detail-jasa" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                <img src="{{ asset('user/images/pictures/jasa.jpg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                    alt=" card="" image"="">
                <div class="content pb-0 mx-2">
                    <h4 class="mb-0  text-truncate">Jasa Fotografi</h4>
                    <h5  class="mb-0">Rp. 400.000</h5>
                    <p>Desa Satu,<span> Kota Batang</span></p>
                </div>
            </a>
        </div>
    </div>
</div>


@endsection