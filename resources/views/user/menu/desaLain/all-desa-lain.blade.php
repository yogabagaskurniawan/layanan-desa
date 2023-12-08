@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Desa Lain</h2>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-12">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari nama desa / kecamatan / kota">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
        </div>
        <div class="pb-2"></div>
    </div>
</div>

<div class="divider mx-3"></div>

<div class="row me-0 ms-0 mb-0">
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <a href="/">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Desa Satu</h2>
                <p class="mb-0 font-14">Kota : Batang<br>Kecamatan : Tulis <br></p>
                <a class="btn bg-mint-dark btn-xxs w-100" href="/">Kunjungi</a>
            </div>
        </div>
    </div>

    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <a href="/">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Desa Satu</h2>
                <p class="mb-0 font-14">Kota : Batang<br>Kecamatan : Tulis <br></p>
                <a class="btn bg-mint-dark btn-xxs w-100" href="/">Kunjungi</a>
            </div>
        </div>
    </div>

    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <a href="/">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Desa Satu</h2>
                <p class="mb-0 font-14">Kota : Batang<br>Kecamatan : Tulis <br></p>
                <a class="btn bg-mint-dark btn-xxs w-100" href="/">Kunjungi</a>
            </div>
        </div>
    </div>
</div>

@endsection