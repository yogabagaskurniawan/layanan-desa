@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Lowongan Kerja yang Saya Buat</h2>
</div>

<div class="divider mx-4"></div>

<div class="my-2 d-flex justify-content-center">
    <a href="/buat-loker" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Buat Lowongan Kerja</a>
</div> 

<div class="divider mx-4"></div>

<div class="card card-style">
    <div class="content">
        <div class="d-flex pb-1">
            <div>
                <span class="badge mb-2 bg-mint-dark rounded-pill">Selasa, 7 Juni 2022</span>
                <h3>Progammer</h3>
                {{-- <h6 class="mt-n2  opacity-80 color-highlight">Cards are Awesome</h6> --}}
            </div>

            <div class="align-self-center ms-auto">
                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark btn-sm mx-1">Detail</a>
                <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m mx-1">Hapus</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
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
                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark btn-sm mx-1">Detail</a>
                <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m mx-1">Hapus</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
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
                <a href="/detail-loker" class="btn btn-xxs bg-mint-dark btn-sm mx-1">Detail</a>
                <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m mx-1">Hapus</a>
            </div>
        </div>
        <p>Kota Batang<span>/</span>Desa satu</p>
    </div>
</div>

@endsection