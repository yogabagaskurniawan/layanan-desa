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