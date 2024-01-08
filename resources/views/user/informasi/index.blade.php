@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Informasi Desa</h2>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
    <div class="content">
        <div class="row">
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari UMKM">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
            <div class="col-4 form-custom">
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected="">Terbaru</option>
                    <option value="1">Terlama</option>
                    <option value="2">Urutkan</option>
                </select>
            </div>
        </div>

        <div class="divider mx-4"></div>
        
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-informasi" class="color-theme" aria-controls="balance2">Lihat</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Kumpulan Desa</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Selasa-2-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>

        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-informasi" class="color-theme" aria-controls="balance2">Lihat</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Gotong Royong</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Senin-3-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>

        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:300px;background-image: url('http://127.0.0.1:8000/user/images/pictures/5l.jpg')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a href="/detail-informasi" class="color-theme" aria-controls="balance2">Lihat</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Sepak Bola</strong>
            <strong class="font-14 card-bottom no-click p-3 text-start color-white font-monospace">Kota : Batang<br> Desa : Satu<br>Tanggal : Sabtu-4-januari-2022<br></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
    </div>
</div>


@endsection