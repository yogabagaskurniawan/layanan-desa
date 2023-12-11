@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Edit UMKM</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-border form-icon form-label">
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="Nama UMKM" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nama UMKM</label>
                <div class="valid-feedback">Name looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <textarea class="form-control rounded-xs" placeholder="alamat" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <textarea class="form-control rounded-xs" placeholder="Deskripsi" id="c7"></textarea>
                <label for="c7" class="color-theme">Deskripsi</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="nomor telephone / whatshapp" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor Telephone / Whatshapp</label>
                <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                <span>(required)</span>
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
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Update</button>
        </form>
    </div>
</div>

@endsection
