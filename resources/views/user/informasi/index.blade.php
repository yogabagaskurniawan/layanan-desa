@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Informasi Desa</h2>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari informasi / desa / kota">
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
        {{-- <div class="my-2 d-flex justify-content-center">
            <a href="/detail-informasi" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Tambah jasa</a>
            <a href="/jasa-saya" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Jasa Saya</a>
        </div>         --}}
        <div class="pb-2"></div>
    </div>
</div>

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