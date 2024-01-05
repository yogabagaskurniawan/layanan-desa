@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-btn')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/umkm-detail" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
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
    </div>
</div>
@endsection

{{-- @extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-btn')
    
<div class="card card-style">
    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="img-fluid">
    <div class="content pb-0">
        <p class="font-900 mb-0">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
            - 7 8/256 Promo </p>
        <h5>RP. 9.000.000</h5>
    </div>
    <div class="divider mx-4"></div>
    <div class="content">
        <div class="accordion accordion-s" id="accordion-group-6">
            <div class="accordion-item">
                <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#accordion6-1">
                    <span class="font-600 font-13">Deskripsi</span>
                    <i class="bi bi-arrow-down-short font-20"></i>
                </button>
                <div id="accordion6-1" class="accordion-collapse collapse" data-bs-parent="#accordion-group-6">
                    <p class="pb-3 opacity-60">
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-style mb-3">
    <div class="content">
        <h4>Bagikan produk ini</h4>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="d-flex mb-3"> 
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-facebook font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-teal shadow-bg shadow-bg-xs"><i class="bi bi-twitter font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-telegram font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-mint shadow-bg shadow-bg-xs"><i class="bi bi-whatsapp font-20 color-white"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}