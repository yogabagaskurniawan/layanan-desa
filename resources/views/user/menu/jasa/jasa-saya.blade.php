@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Jasa Saya</h2>
</div>
<div class="divider mx-4"></div>

<div class="text-center">
    <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m mx-1">Tambah jasa</a>
</div>
<div class="divider mx-4"></div>

<div class="row mb-0 mx-1">
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan1.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Tukang Cat</h2>
                <p class="mb-2 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1">Hapus</a>
            </div>
        </div>
    </div>
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3">
            <img src="{{ asset('user/images/pictures/iklan1.jpeg') }}" class="img-fluid">
            <div class="content pb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                <p class="mb-2 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1">Hapus</a>
            </div>
        </div>
    </div>
</div>
<div class="divider mx-4"></div>
@endsection