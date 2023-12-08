@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Update Toko</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-shop font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="nama toko" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama Toko</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-file-earmark-plus font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="alamat toko" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat Toko</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-telephone-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="nomor telephone / whatshapp" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor Telephone / Whatshapp</label>
                <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-window-sidebar font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="deskripsi toko" id="c7"></textarea>
                <label for="c7" class="color-theme">Deskripsi Toko</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Update Toko</button>
        </form>
    </div>
</div>
@endsection