@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')
<div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('{{ asset('user/images/pictures/23.jpg') }}')"></div>
<div class="pb-2"></div>
<div class="card card-style">
    <div class="content">
        <div class="text-center">
            <h4 style="margin: 5px 0;">Bumdes9</h4>
            <p style="color: green;margin: 5px 0;">Batang</p>
            <p style="margin: 5px 0;">Desa Satu</p>
            <p style="color: blue;margin: 5px 0;font-size:18px;">Rp 250,000</p>
            {{-- <p style="margin: 5px 0;">Bumdes9</p> --}}
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
        {{-- <div >
            <h4 style="margin: 5px 0;">Bumdes9</h4>
            <p style="color: blue;margin: 5px 0;">Batang</p>
            <p style="margin: 5px 0;">Desa Satu</p>
            <p style="color: green;margin: 5px 0;font-size:18px;">Rp 250,000</p>
            <p style="margin: 5px 0;">Bumdes9</p>
        </div> --}}
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
<div class="card card-style">
    <div class="content">
        <div class="text-start">
            <h1 class="">Bumdes Lainnya</h1>
        </div>
        <div class="divider my-3"></div>
        <div class="row mb-0 mx-1">
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-bumdes">
                        <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">bumdes 1</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-bumdes">
                        <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">bumdes 2</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-bumdes">
                        <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">bumdes 3</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-3 mb-4">
                <div class="card card-style m-0 rounded-3">
                    <a href="/detail-bumdes">
                        <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
                    </a>
                    <div class="content pb-0 text-center">
                        <h2 class="text-truncate" style="max-width: 100%;">bumdes 4</h2>
                        <p class="mb-0 font-14"><span class="text-primary font-16"> Rp 250.000</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection