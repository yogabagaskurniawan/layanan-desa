@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Masukan</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
@endsection

@section('content')
@include('layouts.user.partials.footer-bar')
<!-- Page Title-->
<div class="pt-3">
    <div class="page-title d-flex pb-3">
        <div class="align-self-center">
            <a href="/menu"
            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">Masukan</h1>
        </div>
    </div>
</div>
<div class="card card-style mt-3 mx-0 pb-4">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <h3 class="text-center mb-1">Buat Saran / Masukan</h3>
        <div class="divider mx-1 my-2 mb-3"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-asterisk font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Judul / Perihal</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-pencil-fill font-12"></i>
                <textarea class="form-control rounded-xs" placeholder="Leave a comment here" id="c7"></textarea>
                <label for="c7" class="color-theme">Isi Masukan / Saran</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="file-data ">
                <div class="row text-center images-container"></div>
                <div class="text-center">
                    <input type="file" class="upload-file" accept="image/*">
                    <p class="btn btn-xxs text-uppercase rounded-s upload-file-text mb-0 border-blue-dark color-blue-dark">Upload foto profil toko</p>
                    <p style="font-size:12px">Maksimal ukuran foto 3MB</p>
                </div>
            </div> 
            <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s my-4" type="submit">Kirim Masukan</button>
        </form>
        <h3 class="text-center mb-1 pt-4">Masukan / Saran Saya</h3>
        <div class="divider mx-1 my-2 mb-3"></div>
        <a href="/masukan-user" class="btn btn-xxs btn-full mb-2 gradient-mint"><i class="bi bi-check-circle me-1"></i> Tambah fitur</a>
        <a href="/masukan-user" class="btn btn-xxs btn-full mb-2 gradient-mint"><i class="bi bi-check-circle me-1"></i> Pelayanan di tingkatkan</a>
    </div>
</div>
@endsection
