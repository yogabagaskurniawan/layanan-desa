@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Lowongan Kerja yang Saya Buat</h2>
</div>

{{-- <div class="divider mx-4"></div>

<div class="my-2 d-flex justify-content-center">
    <a href="/buat-loker" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Buat Lowongan Kerja</a>
</div>  --}}

<div class="divider mx-4"></div>

<div class="card card-style">
    <div class="content">

        <div class="my-2 d-flex justify-content-center">
            <a href="/buat-loker" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Buat Lowongan Kerja</a>
        </div> 
        <div class="divider mx-4"></div>
        
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-loker" class="color-theme" aria-controls="balance2">Detail</a>
                    </h1>
                    <hr>
                    <h1 class="font-13 my-n1">
                        <a href="/loker" class="color-theme" aria-controls="balance2">Hapus</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Progammer</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Selasa-2-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>

        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-loker" class="color-theme" aria-controls="balance2">Detail</a>
                    </h1>
                    <hr>
                    <h1 class="font-13 my-n1">
                        <a href="/loker" class="color-theme" aria-controls="balance2">Hapus</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Babu</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Senin-3-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>

        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-loker" class="color-theme" aria-controls="balance2">Detail</a>
                    </h1>
                    <hr>
                    <h1 class="font-13 my-n1">
                        <a href="/loker" class="color-theme" aria-controls="balance2">Hapus</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Masak</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Sabtu-4-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
    </div>
</div>


@endsection