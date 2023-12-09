@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')



<div class="card card-style">
    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="img-fluid">
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
            <div class="mb-2"> 
                <a href="/marketplace/detail-produk/hubungi-kurir " class="btn btn-3d bg-blue-light border-blue-dark">hubungi kurir</a>
            </div>
        </div>
    </div>
</div>

<div class="card card-style mb-3">
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="pt-1">
                <img src="{{ asset('user/images/pictures/11t.jpg') }}" class="img-fluid rounded-s" width="110">
            </div>
            <div class="ps-3 me-auto">
                <h3 class="mt-n2 pb-2">Asus.Official</h3>
                <p class="card-text">DesaSatu</p>
            </div>
            <div>
                <a href="/marketplace/detail-produk/kunjungi-toko" class="btn border-green-dark color-green-dark">Lihat</a>
            </div>
        </div>
    </div>
</div>
<div class="container mb-3">
    <p  class="font-900 mb-0 text-truncate">Produk lain di Toko ini</p>
</div>
<div class="row me-0 ms-0 mb-0">
    <div class="col-4 ps-0 pe-0">
        <a href="/marketplace/detail-produk" class="card card-style">
            <img src="{{ asset('user/images/pictures/marketplace-1.jpg') }}" class="img-fluid">
            <div class="content pb-0">
                <p class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog
                Phone 6 Pro - 7 8/256 Promo </p>
            <h5>RP. 9.000.000</h5>
            <p class="card-text">DesaSatu</p>
            </div>
        </a>
    </div>
</div>

@endsection
