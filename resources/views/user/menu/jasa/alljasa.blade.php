@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Jasa</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
{{-- modal --}}
<div id="menu-top-detached" style="height: 360px; display: block; max-width: 1000px;" class="offcanvas offcanvas-top rounded-m offcanvas-detached m-auto" aria-modal="true" role="dialog">
    <div class="d-flex m-3">
        <div class="align-self-center">
            <h2 class="font-700 mb-0">Pencarian</h2>
        </div>
        <div class="align-self-center ms-auto">
            <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
            </a>
        </div>
    </div>
    <div class="content mt-0">
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-floating">
                <i class="bi bi-person-circle font-14 disabled"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Cari jasa</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                {{-- <span>(required)</span> --}}
            </div>

            <div class="form-custom mb-3 form-floating">
                <i class="bi bi-check-circle font-13 disabled"></i>
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected="">Terbaru</option>
                    <option value="1">Terlama</option>
                </select>
                <label for="c6" class="color-theme">Urutkan Berdasarkan</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Cari</button>
        </form>
    </div>
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
                <h1 class="color-theme mb-0 font-18">Jasa</h1>
            </div>
        </div>
    </div>

    <div class=" border-0 mx-0 " style="max-width: 1000px !important;">
        <div class="content mb-0">
            <div class="row">
                <div class="row justify-content-between pe-0">
                    <div class="col-10">
                        <div class="form-custom form-label no-icon mb-3">
                            <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari jasa / desa / kota...">
                            <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                            <label for="c1" class="color-theme">Search</label>
                        </div>
                        
                    </div>
                    <div class="col p-0 w-full">
                        <span data-bs-toggle="offcanvas" data-bs-target="#menu-top-detached" href="#" class="icon icon-xl rounded-pill border border-secondary shadow-bg shadow-bg-xs bg-theme" style="width: 100%; background-color: transparent;">
                            <i class="bi bi-filter font-32 text-secondary"></i>
                        </span>
                    </div>  

                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Tambah Jasa</a>
                        <a href="/jasa-saya" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Jasa Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-style mx-0" style="border-radius: 26px !important">
        <div class="content mb-0 mt-0 px-2">
            <h3 class="font-200 my-3 ms-n2">Semua Jasa</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 card card-style px-1 mx-0 mb-3 position-relative">
                        <img src="{{ asset('user/images/pictures/jasa.jpg') }} " class="card-img-top" style="height: 150px">
                        <div class="logo-and-button">
                            <div class="logo" style="position: absolute; top: 140px; left: 52px; transform: translate(-50%, -50%);">
                                <img src="http://127.0.0.1:8000/user/images/desasatu.png" alt="Logo" width="74" style="height: 74px">
                            </div>
                            <div class="detail-button" style="position: absolute; top: 150px; right: 16px; transform: translateY(-50%);">
                                <a href="/detail-jasa" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
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
                                <a href="/detail-jasa" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
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
                                <a href="/detail-jasa" class="btn btn-xxs bg-mint-dark text-center mx-1">Detail</a>
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



@endsection