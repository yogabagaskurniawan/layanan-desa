@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')

<div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/23.jpg') }}')"></div>
<div class="pb-2"></div>
<div class="card card-style">
    <div class="content">
        <div class="ps-3 me-auto text-center">
            <h3 class="mt-n2 pb-2">Pembangunan desa</h3>
            <p style="margin: 0;">Selasa, 7 Juni 2022</p>
            <p style="margin: 0;">Batang</p>
            <p style="margin: 0;">Desa : Satu</p>
        </div>
        
        <div class="divider my-3"></div>
        <p>
                By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
       
        <div class="divider my-3"></div>
        <h4>Bagikan Informasi</h4>
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

        <div class="header-bar header-center shadow-m">
            <h2 class="m-auto">Informasi Lainnya</h2>
        </div>

        <div class="divider mx-3"></div>

        <div class="card card-style">
            <div class="content mb-0">
                {{-- <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari nama wisata / nama desa">
                    <label for="c1" class="color-theme ">Search</label>
                </div> --}}
                <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/5l.jpg')}}')">
                    <div class="card-center">
                        <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                            <h1 class="font-13 my-n1">
                                <a class="color-theme" href="/detail-informasi" aria-controls="balance2">Selengkapnya</a>
                            </h1>
                        </div>
                    </div>
                    <strong class="card-top no-click font-20 p-3 color-white font-monospace">Kumpulan Desa</strong>
                    <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang<br> Desa Satu <br> Tanggal : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">Senin, 6 Juni 2022</p></strong></strong>
                    <div class="card-overlay bg-black opacity-30"></div>
                </div>
                <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/5l.jpg')}}')">
                    <div class="card-center">
                        <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                            <h1 class="font-13 my-n1">
                                <a class="color-theme" href="/detail-informasi" aria-controls="balance2">Selengkapnya</a>
                            </h1>
                        </div>
                    </div>
                    <strong class="card-top no-click font-20 p-3 color-white font-monospace">Pembangunan desa</strong>
                    <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang<br> Desa Satu <br> Tanggal : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">Senin, 6 Juni 2022</p></strong></strong>
                    <div class="card-overlay bg-black opacity-30"></div>
                </div>
                <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/5l.jpg')}}')">
                    <div class="card-center">
                        <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                            <h1 class="font-13 my-n1">
                                <a class="color-theme" href="/detail-informasi" aria-controls="balance2">Selengkapnya</a>
                            </h1>
                        </div>
                    </div>
                    <strong class="card-top no-click font-20 p-3 color-white font-monospace">Gotong royong</strong>
                    <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang<br> Desa Satu <br> Tanggal : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">Senin, 6 Juni 2022</p></strong></strong>
                    <div class="card-overlay bg-black opacity-30"></div>
                </div>
                <div class="pb-2"></div>
            </div>
        </div>

@endsection