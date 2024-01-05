@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Marketplace</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
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
                <label for="c1" class="color-theme">Cari Produk</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                {{-- <span>(required)</span> --}}
            </div>
            <div class="form-custom mb-3 form-floating">
                <i class="bi bi-person-circle font-14 disabled"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Berdasarkan Kota / Kecamatan</label>
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
            <h1 class="color-theme mb-0 font-18">Marketplace</h1>
        </div>
    </div>
</div>
<div class=" border-0 mx-0 " style="max-width: 1000px !important;">
    <div class="content mb-0">
        <div class="row">
            <div class="row justify-content-between pe-0">
                <div class="col-10">
                    <div class="form-custom form-label no-icon mb-3">
                        <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari produk...">
                        <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                        <label for="c1" class="color-theme">Search</label>
                    </div>
                    
                </div>
                <div class="col p-0 w-full">
                    <span data-bs-toggle="offcanvas" data-bs-target="#menu-top-detached" href="#" class="icon icon-xl rounded-pill border border-secondary shadow-bg shadow-bg-xs bg-theme" style="width: 100%; background-color: transparent;">
                        <i class="bi bi-filter font-32 text-secondary"></i>
                    </span>
                </div>
                
            </div>
            <h3 class="font-200 my-3">Pilih Kategori Belanja</h3>
            <div class="wrapper d-flex py-1" style="overflow-x: auto !important">
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <a href="">
                            <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                            <div class="content mt-1 mb-3 pb-0">
                                <p class="text-center font-600">Semua</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                        <div class="content mt-1 mb-3 pb-0">
                            <p class="text-center font-600">Makanan</p>
                        </div>
                    </div>
                </div>
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                        <div class="content mt-1 mb-3 pb-0">
                            <p class="text-center font-600">Pakaian</p>
                        </div>
                    </div>
                </div>
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                        <div class="content mt-1 mb-3 pb-0">
                            <p class="text-center font-600">Handphone</p>
                        </div>
                    </div>
                </div>
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                        <div class="content mt-1 mb-3 pb-0">
                            <p class="text-center font-600">Elektronik</p>
                        </div>
                    </div>
                </div>
                <div class="item me-2" >
                    <div class=" m-0 " style="width: 100px !important;">
                        <img src="{{ asset('user/images/pictures/wisata1.jpeg') }}" class="img-fluid rounded" style="height: 100px">
                        <div class="content mt-1 mb-3 pb-0">
                            <p class="text-center font-600">Snack</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="card card-style mx-0" style="border-radius: 26px !important">
    <div class="content my-0 px-2">
        <h3 class="font-200 my-3 ms-n2">Pilihan Terbaik Anda</h3>
        <div class="row mb-0">
            <div class="col-4 col-sm-3 col-md-2 px-0">
                <a href="/marketplace/detail-produk" class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Elektronik</span>
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
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
                <a href="/marketplace/detail-produk" class="card card-style mx-1 mb-2" style="border-radius: 12px !important" class="position-relative">
                    <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Makanan</span>
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
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
                <a href="/marketplace/detail-produk" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
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
                <a href="/marketplace/detail-produk" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
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
                <a href="/marketplace/detail-produk" class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid rounded" style="height: 113px !important;
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

@endsection
