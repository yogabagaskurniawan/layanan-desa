@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/masukan" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
    </div>
</div>
<div class="card card-style mx-0 rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
    {{-- jika tidak ada gambar --}}
    {{-- <div class="mt-5 pt-5"></div> --}}
    {{-- jika ada gambar --}}
    <img src="{{ asset('user/images/pictures/merkLaptop.jpeg') }}" class="img-fluid d-block m-auto" style="width: 432px; height: 432px; border-bottom-right-radius: 26px;border-bottom-left-radius: 26px">
    <div class="content pb-0 mt-3 mb-0">
        <h2 class="font-200 mb-0">Tambah fitur</h2>
        <p class="mb-0 font-500 font-14 mb-3">Minggu, 7 Januari 2024</p>
        <p class="mb-3 font-500 font-14">
            stry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan
        </p>
        <h2 class="font-200 mt-3">Balasan</h2>
        <p class="mb-0 font-500 font-14 mb-3">Belum ada balasan</p>
        <div class="divider mx-1 mt-1 mb-2"></div>
        <div class="mb-4 d-flex justify-content-center">
            <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1">Hapus masukan</a>
        </div>
    </div>
</div>
@endsection