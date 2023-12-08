@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')
<div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/iklan2.jpeg') }}')"></div>
<div class="pb-2"></div>
<div class="card card-style">
    <div class="content">
        <div class="text-center">
            <h1 class="">Fotografi</h1>
            {{-- <p>Kota Pekalongan <br> Desa Satu</p> --}}
            <p class="mb-0 font-14">Batang<br>Desa Satu <br><span class="text-primary font-16"> Rp 250.000</span></p>
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
        <p>
                By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
        <div class="divider my-3"></div>
        <h4>Bagikan Wisata Desa ini</h4>
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
<div class="pb-2"></div>
<div class="card card-style">
    <div class="content">
        <div class="text-start">
            <h1 class="">Jasa Lainnya</h1>
        </div>
        <div class="divider my-3"></div>
        <div class="row mb-0 mx-1">
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-jasa">
                        <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">Fotografi</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-jasa">
                        <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-jasa">
                        <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">Jasa Desain Interior hshshsh</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection