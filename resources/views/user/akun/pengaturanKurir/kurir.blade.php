@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Pengaturan Kurir</h2>
</div>
<div class="card card-style overflow-visible" style="margin-top: 80px">
    <div class="mt-n5"></div>
    <div class="text-center">
        <label for="fileInput" class="position-relative">
            <input type="file" id="fileInput" class="visually-hidden">
            <img src="{{ asset('/user/images/pictures/31t.jpg') }}" alt="img" width="180" class="rounded-circle shadow-l">
            <i class="bi bi-pencil-fill position-absolute bottom-0 bg-white rounded-circle p-3 shadow-sm" style="right: -10px; cursor: pointer;"></i>
        </label>
    </div>
    <div class="mt-3 d-flex justify-content-center">
        <label class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">
            <i class="bi bi-pencil-fill pe-2 ms-n1"></i>Update foto
        </label>
    </div>

    <h1 class="color-theme text-center font-30 pt-3 mb-1">Wanto Wardana</h1>
    <p class="text-center font-16 mb-0">Pekalongan <br>085176720024</p>
    <div class="content">
        <div class="divider my-3"></div>
        <div class="row text-center">
            <div class="col-8 m-auto">
                <h4>STATUS (OFFLINE)</h4>
            </div>
            <div class="my-2 d-flex justify-content-center">
                <a href="/toko-edit" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1">Update Online</a>
            </div>
        </div>
        <div class="divider my-3"></div>
        <div class="row text-center">
            <div class="col-8 m-auto">
                <h4>STATUS (ONLINE)</h4>
            </div>
            <div class="my-2 d-flex justify-content-center">
                <a href="/toko-edit" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Update Ofline</a>
            </div>
        </div>
    </div>
</div>
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Form Daftar Kurir</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-telephone-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="nomor telephone / whatshapp" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor Telephone / Whatshapp</label>
                <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-file-earmark-plus font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="alamat" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="file-data">
                <img id="image-data" src="{{ asset('user/images/empty.png') }}" class="img-fluid rounded-s" alt="img">
                <span class="upload-file-name d-block text-center"
                      data-text-before="<i class='bi bi-check-circle-fill color-green-dark pe-2'></i> Image:"
                      data-text-after=" is ready.">
                </span>
                <div class="text-center">
                    <input type="file" class="upload-file" accept="image/*">
                    <p class="btn btn-xxs text-uppercase rounded-s upload-file-text mb-0 border-blue-dark color-blue-dark">Upload gambar</p>
                    <p style="font-size:12px">Maksimal ukuran foto 3MB</p>
                </div>
            </div>
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Daftar</button>
        </form>
    </div>
</div>
@endsection