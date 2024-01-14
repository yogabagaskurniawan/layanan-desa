@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/loker"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Buat Lowongan Kerja</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>
@endsection

@section('content')
@include('layouts.user.partials.footer-bar')

{{-- <div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Buat Lowongan Kerja</h2>
</div>

<div class="divider mx-4"></div> --}}
<div class="pt-3">
    <div class="page-title d-flex pb-3">
        <div class="align-self-center">
            <a href="/loker" class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">Buat Lowongan Kerja</h1>
        </div>
    </div>
</div>

<div class="card card-style mx-0 mt-3 pt-3">
    <div class="container px-3 mx-auto" style="max-width: 576px">
        <div class="content">
            <form class="demo-animation needs-validation m-0" novalidate="">
                <div class="form-custom mb-3 form-border form-icon form-label">
                    <i class="bi bi-person-circle font-14"></i>
                    <input type="text" class="form-control rounded-xs" id="c1" placeholder="Masukan nama Loker" pattern="[A-Za-z ]{1,32}" required="">
                    <label for="c1" class="color-theme">Nama Loker</label>
                    <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                    <div class="invalid-feedback">Name is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                
                <div class="form-custom mb-3 form-border form-icon form-label">
                    <i class="bi bi-window-sidebar font-14"></i>
                    <textarea class="form-control rounded-xs" placeholder="deskripsi" id="c7"></textarea>
                    <label for="c7" class="color-theme">Deskripsi</label>
                    <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
                </div>

                <div class="form-custom mb-3 form-border form-icon form-label">
                    <i class="bi bi-telephone-fill font-12"></i>
                    <input type="tel" class="form-control rounded-xs" id="c3" placeholder="no telpon" pattern="[+ 0-9]{10,15}" required="">
                    <label for="c3" class="color-theme">Your Phone</label>
                    <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                    <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                    <span>(required)</span>
                </div>
                <div class="file-data">
                    <div class="row text-center images-container"></div>
                    <div class="text-center">
                        <input type="file" class="upload-file" accept="image/*" multiple>
                        <p class="btn btn-xxs text-uppercase rounded-s upload-file-text mb-0 border-blue-dark color-blue-dark">Upload gambar</p>
                        <p style="font-size:12px">Maksimal ukuran foto 3MB Maksimal 3 foto</p>
                    </div>
                </div>           
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Daftar</button>
            </form>
        </div>
    </div>
</div>

@endsection