@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar')
<div class="card card-style mb-3">
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="pt-1">
                <img src="{{ asset('user/images/pictures/11t.jpg') }}" class="img-fluid rounded-s" width="110">
            </div>
            <div class="ps-3 me-auto">
                <h3 class="mb-2">
                    Asus.Official
                    <mark class="highlight ps-2 font-12 pe-2 bg-green-dark px-2 py-1">aktif</mark>
                    {{-- <mark class="highlight ps-2 font-12 pe-2 bg-red-dark px-2 py-1" style="margin-left: 5px;">Nonaktif</mark> --}}
                </h3>
                <p class="mb-1">Kota : Batang</p> 
                <p class="mb-1">Kecamatan : Tulis</p>
                <p class="mb-1">Desa : Tulis</p>
                <p class="mb-1">Alamat : Jl. Duren</p>
            </div>
        </div>
    </div>
    <div class="divider mx-1 my-2"></div>
    <div class="content pt-0">
        <div class="accordion accordion-s" id="accordion-group-6">
            <div class="accordion-item">
                <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#accordion6-1">
                    <span class="font-600 font-13">Deskripsi</span>
                    <i class="bi bi-arrow-down-short font-20"></i>
                </button>
                <div id="accordion6-1" class="accordion-collapse collapse" data-bs-parent="#accordion-group-6">
                    <p class="pb-3 opacity-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
                        ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="divider mx-1 my-2"></div>
    <div class="content">
        <h4>Bagikan toko ini</h4>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <!-- Perubahan di sini -->
            <div class="d-flex mb-3">
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i
                                class="bi bi-facebook font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-teal shadow-bg shadow-bg-xs"><i
                                class="bi bi-twitter font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i
                                class="bi bi-telegram font-20 color-white"></i></span>
                    </a>
                </div>
                <div class="align-self-center me-2">
                    <a href="">
                        <span class="icon icon-m rounded-s gradient-mint shadow-bg shadow-bg-xs"><i
                                class="bi bi-whatsapp font-20 color-white"></i></span>
                    </a>
                </div>
            </div>
            <div class="text-center mb-1">
                <p>atau</p>
            </div>
            <div class="mb-2">
                <a href="#" class="col btn btn-full btn-l btn-3d bg-mint-light border-green-dark text-center"><i
                        class="bi bi-whatsapp pe-3 ms-n1"></i>Hubungi Toko</a>
            </div>
        </div>
    </div>
</div>
<div class="card card-style">
    <div class="container mb-3 mt-3">
        <p  class="font-900 mb-0 text-truncate">Produk lain di Toko ini</p>
    </div>
    <div class="col-6 pe-0 ps-0">
        <a href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
            <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid"
                alt="Card Image">
            <div class="content pb-0">
                <p class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                    style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                    - 7 8/256 Promo </p>
                <h5>RP. 9.000.000</h5>
                <p class="card-text">DesaSatu</p>
            </div>
        </a>
    </div>
</div>
@endsection
