@extends('layouts.user.main')
@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Daftar Lowongan Kerja</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
@endsection


@section('content')
@include('layouts.user.partials.footer-bar')
    <div class="pt-3">
        <div class="page-title d-flex pb-3">
            <div class="align-self-center">
                <a href="/menu" class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Daftar Lowongan Kerja</h1>
            </div>
        </div>
    </div>
    <div class=" border-0 mx-0 " style="max-width: 1000px !important;">
        <div class="content mb-0">
            <div class="row">
                <div class="col-12">
                    <div class="form-custom form-label no-icon mb-3">
                        <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari Lowongan Kerja..">
                        <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                        <label for="c1" class="color-theme">Search</label>
                    </div>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <a href="/buat-loker" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Buat Lowongan Kerja</a>
                    <a href="/loker-saya" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Lowongan Kerja Saya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style mx-0" style="border-radius: 26px !important">
        <div class="content mb-0 mt-0 px-2">
            <h3 class="font-200 my-3 ms-n2">Semua Lowongan Kerja</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/loker.png')}} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Progammer</h4>
                            <p class="mb-0">Desa Satu Kota Batang</p>
                            <p>Tanggal Selasa-2-januari-2022</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/loker.png')}} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desadua.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Masak</h4>
                            <p  class="mb-0">Desa Dua Kota Batang</p>
                            <p>Tanggal Selasa-2-januari-2022</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/loker.png')}} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
                            </div>
                        </div>
                        <div class="content pb-0 mt-4 pt-3 mb-3">
                            <h4 class="mb-0">Operator</h4>
                            <p class="mb-0">Desa Satu Kota Batang</p>
                            <p>Tanggal Selasa-2-januari-2022</p>
                        </div>
                    </div>
                </div>
        <div class="pb-2"></div>
        </div>
    </div>

@endsection