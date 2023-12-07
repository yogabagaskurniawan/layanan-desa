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

        <div class="card card-style mb-3">
            <div class="content">
                <div class="d-flex">
                    <div class="pt-1 ms-auto">
                        <img src="{{ asset('user/images/pictures/5l.jpg')}}" class="img-fluid rounded-s" width="110">
                    </div>
                    <div class="ps-3 me-auto">
                        <h3 class="mt-n2 pb-2">Pembangunan desa</h3>
                        <p style="margin: 0;">Selasa, 7 Juni 2022</p>
                        <p style="margin: 0;">Batang</p>
                        <p style="margin: 0;">Desa : Satu</p>
                        <div class="my-2 d-flex">
                            <a href="/detail-informasi" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style mb-3">
            <div class="content">
                <div class="d-flex">
                    <div class="pt-1 ms-auto">
                        <img src="{{ asset('user/images/pictures/5l.jpg')}}" class="img-fluid rounded-s" width="110">
                    </div>
                    <div class="ps-3 me-auto">
                        <h3 class="mt-n2 pb-2">Gotong royong</h3>
                        <p style="margin: 0;">Senin, 6 Juni 2022</p>
                        <p style="margin: 0;">Batang</p>
                        <p style="margin: 0;">Desa : Satu</p>
                        <div class="my-2 d-flex">
                            <a href="/detail-informasi" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style mb-3">
            <div class="content">
                <div class="d-flex">
                    <div class="pt-1 ms-auto">
                        <img src="{{ asset('user/images/pictures/5l.jpg')}}" class="img-fluid rounded-s" width="110">
                    </div>
                    <div class="ps-3 me-auto">
                        <h3 class="mt-n2 pb-2">Kumpulan Desa</h3>
                        <p style="margin: 0;">Sabtu, 11 Juni 2022</p>
                        <p style="margin: 0;">Batang</p>
                        <p style="margin: 0;">Desa : Satu</p>
                        <div class="my-2 d-flex">
                            <a href="/detail-informasi" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection