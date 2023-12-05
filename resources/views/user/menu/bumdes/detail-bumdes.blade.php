@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')
<div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/23.jpg') }}')"></div>
<div class="pb-2"></div>
<div class="card card-style">
    <div class="content">
        {{-- <div class="text-center">
            <h1 class="">Museum Sultan Mahmud Badaruddin</h1>
            <p class="m-0">Jam Buka / Tutup : 21:21:00-21:21:00</p>
            <p>Kota Pekalongan <br> Desa Satu</p>
        </div> --}}
        <div class="divider my-3"></div>
        <div >
            <p style="margin: 5px 0;">Bumdes9</p>
            <p style="color: blue;margin: 5px 0;font-size:18px;">Batang</p>
            <p style="margin: 5px 0;">Desa Satu</p>
            <p style="color: green;margin: 5px 0;font-size:22px;">Rp 250,000</p>
            <p style="margin: 5px 0;">Bumdes9</p>
        </div>
        <div class="divider my-3"></div>
        <h4>Bagikan Produk Bumdes</h4>
        <div class="d-flex">
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
@endsection