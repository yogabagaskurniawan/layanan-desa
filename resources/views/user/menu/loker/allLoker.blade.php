@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Daftar Loker</h2>
</div>

<div class="divider mx-4"></div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-12">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari Loker">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
        </div>
        <div class="my-2 d-flex justify-content-center">
            <a href="/tambah-loker" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Buat Lowongan Kerja</a>
        </div>        
        <div class="pb-2"></div>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <div class="d-flex pb-1">
            <div>
                <span class="badge mb-2 bg-mint-dark rounded-pill">Selasa, 7 Juni 2022</span>
                <h3>Progammer</h3>
                {{-- <h6 class="mt-n2  opacity-80 color-highlight">Cards are Awesome</h6> --}}
            </div>
            <div class="align-self-center ms-auto">
                <a href="/detail-loker" class="btn bg-mint-dark btn-sm">Detail</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <div class="d-flex pb-1">
            <div>
                <span class="badge mb-2 bg-mint-dark rounded-pill">Jumat, 8 Juni 2022</span>
                <h3>Masak</h3>
                {{-- <h6 class="mt-n2  opacity-80 color-highlight">Cards are Awesome</h6> --}}
            </div>
            <div class="align-self-center ms-auto">
                <a href="/detail-loker" class="btn bg-mint-dark btn-sm">Detail</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <div class="d-flex pb-1">
            <div>
                <span class="badge mb-2 bg-mint-dark rounded-pill">Senin, 9 Juni 2022</span>
                <h3>Karyawan</h3>
                {{-- <h6 class="mt-n2  opacity-80 color-highlight">Cards are Awesome</h6> --}}
            </div>
            <div class="align-self-center ms-auto">
                <a href="/detail-loker" class="btn bg-mint-dark btn-sm">Detail</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <div class="d-flex pb-1">
            <div>
                <span class="badge mb-2 bg-mint-dark rounded-pill">Sabtu, 10 Juni 2022</span>
                <h3>Gojek</h3>
                {{-- <h6 class="mt-n2  opacity-80 color-highlight">Cards are Awesome</h6> --}}
            </div>
            <div class="align-self-center ms-auto">
                <a href="/detail-loker" class="btn bg-mint-dark btn-sm">Detail</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
    </div>
</div>

@endsection