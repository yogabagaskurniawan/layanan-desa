@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">UMKM</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
@endsection

@section('content')
@include('layouts.user.partials.footer-bar')
<!-- Page Title-->
<div class="pt-3">
    <div class="page-title d-flex pb-3">
        <div class="align-self-center">
            <a href="/menu"
            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">UMKM</h1>
        </div>
    </div>
</div>
<div class=" border-0 mx-0 " style="max-width: 1000px !important;">
    <div class="content mb-0">
        <div class="row">
            <div class="col">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari nama umkm / nama desa..">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                    <label for="c1" class="color-theme">Search</label>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="card card-style mx-0" style="border-radius: 26px !important">
    <div class="content my-0 px-2">
        <h3 class="font-200 my-3 ms-n2">Semua UMKM</h3>
        <div class="row mb-0">
            <div class="col-4 col-sm-3 col-md-2 px-0 mb-2">
                <a href="/umkm-detail" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Toge Production</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <p class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%">Kunjungi</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0 mb-2">
                <a href="/umkm-detail" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Indomaret</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <p class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%">Kunjungi</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0 mb-2">
                <a href="/umkm-detail" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Subur Jaya</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <p class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%">Kunjungi</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0 mb-2">
                <a href="/umkm-detail" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Toge Production</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <p class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%">Kunjungi</p>
                    </div>
                </a>
            </div>
        </div>
    </div> 
</div>
@endsection