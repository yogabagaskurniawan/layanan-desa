@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Jasa</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari jasa / desa / kota">
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
        <div class="my-2 d-flex justify-content-center">
            <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Tambah jasa</a>
            <a href="/jasa-saya" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Jasa Saya</a>
        </div>        
        <div class="pb-2"></div>
    </div>
</div>
{{-- <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid"> --}}
<div class="row mb-0 mx-1">
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Fotografi</h2>
                <p class="mb-0 font-14">Batang<br>Desa Satu <br><span class="text-primary font-16"> Rp 250.000</span></p>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                <p class="mb-0 font-14">Batang<br>Desa Satu <br><span class="text-primary font-16"> Rp 250.000</span></p>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                <p class="mb-0 font-14">Batang<br>Desa Satu <br><span class="text-primary font-16"> Rp 250.000</span></p>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                <p class="mb-0 font-14">Batang<br>Desa Satu <br><span class="text-primary font-16"> Rp 250.000</span></p>
            </div>
        </div>
    </div>
</div>
<div class="divider mx-4"></div>
@endsection