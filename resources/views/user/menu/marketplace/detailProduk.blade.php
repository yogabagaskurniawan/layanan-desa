@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-btn')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/all-marketplace" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center">
            <a href="#" data-bs-toggle="dropdown" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bbi bi-share-fill color-theme font-14"></i>
            </a>
            <!-- Page Title Dropdown Menu-->
            <div class="dropdown-menu">
                <div class="card card-style shadow-m mt-1 me-1">
                    <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-facebook"></i>
                            <strong class="font-13">Facebook</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-teal shadow-bg shadow-bg-xs color-white rounded-xs bi bi-twitter"></i>
                            <strong class="font-13">Twitter</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-telegram"></i>
                            <strong class="font-13">Telegram</strong>
                        </a>
                        <a href="" class="list-group-item">
                            <i class="has-bg gradient-mint shadow-bg shadow-bg-xs color-white rounded-xs bi bi-whatsapp"></i>
                            <strong class="font-13">Whatsapp</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-style mx-0 rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('user/images/pictures/marketplace-1.jpg') }}" class="img-fluid d-block m-auto" style="width: 432px; height: 432px; border-bottom-right-radius: 26px;border-bottom-left-radius: 26px">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('user/images/pictures/merkLaptop.jpeg') }}" class="img-fluid d-block m-auto" style="width: 432px; height: 432px; border-bottom-right-radius: 26px;border-bottom-left-radius: 26px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="content pb-0 mt-3 mb-0">
        <h2 class="font-200 mb-0">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro - 7 8/256 Promo </h2>
        <h3 class="font-200 my-3">RP. 9.000.000</h3>
        <h3 class="font-200">Deskripsi Produk</h3>
        <p class="mb-3 font-500 font-14">
            Penjelasan Produk Second Like New
            - IMEI TERDAFTAR KEMENPRIN
            - Hardware & Software Normal 100% tanpa kendala
            - Battery Normal
            - X Mode Normal
            - Air Trigger Normal R & L
            - NFC ON
            *semua product gadget yang kita jual sudah lolos Quality Qontrol
            dan sudah bisa dipastikan unit siap pakai saat barang diterima

            Ketentuan Garansi
            - Wajib video unboxing saat barang diterima dan lakukan pengecekan
            dari awal hingga pengecekan unit
            - Garansi toko 30 hari sejak barang diterima
            - Garansi tukar unit 1x24 jam hingga barang diterima ( WAJIB VIDEO UNBOXING )
            - SEGEL garansi tidak dilepas, jaga baik baik segel selama masa garansi ada
            - Garansi tidak akan berlaku, jika kerusakannya karena human error, seperti terjatuh, terkena
            air, terkena tegangan listrik dan sebagainya.
        </p>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="pt-1">
                <img src="{{ asset('user/images/pictures/kurir1.jpeg') }}" class="img-fluid rounded-circle" width="80">
            </div>
            <div class="ps-3 me-auto">
                <h2 class="mt-n2">Asus.Official</h2>
                <p class="card-text font-14">Tulis, Batang</p>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <a href="/marketplace/detail-produk/kunjungi-toko" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Kunjungi Toko</a>
            <a href="/kurir" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Hubungi Kurir</a>
        </div>
    </div>
</div>
<div class="content">
    <h3 class="font-200 mb-3">Produk lain di Toko Ini</h3>
    <div class="row mb-0">
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
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
            <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
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
            <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
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
            <a href="/marketplace/detail-produk" class="card card-style me-1 ms-1" style="border-radius: 12px !important">
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
    </div>
</div>
@endsection
