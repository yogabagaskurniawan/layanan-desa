@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">UMKM</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
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
            <div class="row justify-content-between pe-0">
                <div class="col-12">
                    <div class="form-custom form-label no-icon mb-3">
                        <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari nama umkm / nama desa..">
                        <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                        <label for="c1" class="color-theme">Search</label>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="card card-style mx-0 mt-2" style="border-radius: 26px !important">
    <div class="content my-0 ">
        <h3 class="font-200 my-3">Semua UMKM</h3>
        <div class="row mb-0">
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Elektronik</span>
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;"
                        alt="Card Image">
                    <div class="content pb-0 mx-2">
                        <h5 class="font-900 mb-0 text-truncate" style="max-width: 150px;">Toge Production</h5>
                        <p class="mb-1">Tulis, Batang</p>
                        <p class="btn btn-xxl bg-green-dark mx-1 pb-0 pt-0 mb-2">Kunjungi</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Makanan</span>
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;"
                        alt="Card Image">
                    <div class="content pb-0 mx-2">
                        <p class="font-14 font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5 class="text-truncate">Rp 9.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;"
                        alt="Card Image">
                    <div class="content pb-0 mx-2">
                        <p class="font-14 font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5 class="text-truncate">Rp 9.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;"
                        alt="Card Image">
                    <div class="content pb-0 mx-2">
                        <p class="font-14 font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5 class="text-truncate">Rp 9.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/iklan2.jpeg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;"
                        alt="Card Image">
                    <div class="content pb-0 mx-2">
                        <p class="font-14 font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5 class="text-truncate">RP.90.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
        </div>
    </div> 
</div>

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">UMKM</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari UMKM">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
            <div class="col-4 form-custom">
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected="">Terbaru</option>
                    <option value="1">Terlama</option>
                    <option value="2">Urutkan</option>
                </select>
            </div>
        </div> 
        <div class="row mb-0">
            <div class="col-6 col-sm-4 col-lg-3 pe-0 ps-0">
                <div href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content mb-0 pb-0">
                        <h5 class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk" style="max-width: 150px;">Toge Production</h5>
                            <p class="mb-0">Batang</p>
                            <p class="mb-1">Tulis</p>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <a href="/umkm-detail" class="btn btn-xxl bg-green-dark mx-1 pb-0 pt-0 mb-2">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 pe-0 ps-0">
                <div href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content mb-0 pb-0">
                        <h5 class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Toge Production</h5>
                            <p class="mb-0">Batang</p>
                            <p class="mb-1">Tulis</p>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <a href="/umkm-detail" class="btn btn-xxl bg-green-dark mx-1 pb-0 pt-0 mb-2">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 pe-0 ps-0">
                <div href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content mb-0 pb-0">
                        <h5 class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Toge Production</h5>
                            <p class="mb-0">Batang</p>
                            <p class="mb-1">Tulis</p>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <a href="/umkm-detail" class="btn btn-xxl bg-green-dark mx-1 pb-0 pt-0 mb-2">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- @extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar') --}}


{{-- @endsection --}}