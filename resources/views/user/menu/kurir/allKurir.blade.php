@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">List kurir</a>
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
            <h1 class="color-theme mb-0 font-18">List kurir</h1>
        </div>
    </div>
</div>
{{-- content --}}
<div class="card card-style mx-0 mt-3" style="border-radius: 26px !important">
    <div class="content my-0 px-2">
        <h3 class="font-200 my-3 ms-n2">Kurir Lokal</h3>
        <div class="row mb-0">
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-success position-absolute top-0 end-0 m-2 bg-success-dark px-2 rounded-s font-12">Aktif</span>
                    <img src="{{ asset('user/images/pictures/kurir1.jpeg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Abdul Ali</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <a href="" class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%"><i class="bi bi-whatsapp me-1"></i>Whatshapp</a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2 bg-danger-dark px-2 rounded-s font-12">Tidak Aktif</span>
                    <img src="{{ asset('user/images/pictures/kurir1.jpeg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Abdul Ali</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <a href="" class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%"><i class="bi bi-whatsapp me-1"></i>Whatshapp</a>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="font-200 my-3 ms-n2">Kurir Desa Lain</h3>
        <div class="row mb-0">
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-success position-absolute top-0 end-0 m-2 bg-success-dark px-2 rounded-s font-12">Aktif</span>
                    <img src="{{ asset('user/images/pictures/kurir2.jpeg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Abdul Ali</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <a href="" class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%"><i class="bi bi-whatsapp me-1"></i>Whatshapp</a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-success position-absolute top-0 end-0 m-2 bg-success-dark px-2 rounded-s font-12">Aktif</span>
                    <img src="{{ asset('user/images/pictures/kurir2.jpeg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                        alt="Card Image">
                    <div class="content pb-0 mx-2 mt-2 mb-3">
                        <h5 class="text-truncate">Abdul Ali</h5>
                        <p class="card-text mb-2">Tulis, Batang</p>
                        <a href="" class="py-1 btn btn-xxs bg-mint-dark shadow-bg-m text-center" style="width: 100%"><i class="bi bi-whatsapp me-1"></i>Whatshapp</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection