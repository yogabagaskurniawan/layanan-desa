@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/jasa"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Jasa Saya</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
@endsection

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="page-content " style="max-width: 1000px; margin: 0 auto;">

    <div class="pt-3">
        <div class="page-title d-flex pb-3">
            <div class="align-self-center">
                <a href="/jasa" class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Jasa Saya</h1>
            </div>
        </div>
    </div>

    <div class="card card-style mx-0" style="border-radius: 26px !important">
        <div class="content mb-0 mt-0 px-2"><br>
            {{-- <h3 class="font-200 my-3 ms-n2">Semua Lowongan Kerja Saya Buat</h3> --}}
            <div class="my-2 d-flex justify-content-center">
                <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Tambah Jasa</a>
            </div><br>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/pictures/jasa.jpg') }} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/hapus-loker" class="btn btn-xxs bg-red-dark text-center mx-1">Hapus</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Jasa Tukang</h4>
                            <h5  class="mb-0">Rp. 400.000</h5>
                            <p>Desa Satu,<span> Kota Batang</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/pictures/jasa.jpg') }} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desadua.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/hapus-loker" class="btn btn-xxs bg-red-dark text-center mx-1">Hapus</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Jasa Masak</h4>
                            <h5  class="mb-0">Rp. 400.000</h5>
                            <p>Desa Dua,<span> Kota Batang</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/pictures/jasa.jpg') }} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/hapus-loker" class="btn btn-xxs bg-red-dark text-center mx-1">Hapus</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Jasa Fotografi</h4>
                            <h5  class="mb-0">Rp. 400.000</h5>
                            <p>Desa Satu,<span> Kota Batang</span></p>
                        </div>
                    </div>
                </div>
        <div class="pb-2"></div>
        </div>
    </div>

</div>


@endsection