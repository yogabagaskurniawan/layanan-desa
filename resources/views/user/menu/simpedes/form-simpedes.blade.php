@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto text-center py-3">Simpan Pinjam Desa <br> <span class="font-16 fw-light">Untuk menjadi Nasabah silahkan lakukan pendaftaran di bawah ini..</span></h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
    <div class="text-center">
        <h1 class="">Daftar</h1>
        {{-- <p class="m-0">Untuk menjadi Nasabah silahkan lakukan pendaftaran di bawah ini..</p> --}}
    </div>
    <div class="divider my-3"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama Lengkap</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-file-earmark-plus font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="Jl. Urip Sumarno" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-telephone-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="083130130" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor Telephone / Whatshapp</label>
                <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Daftar</button>
        </form>
    </div>
</div>
<div class="card card-style">
    <div class="content">
        <div class="text-center">
            <h1 class="">Menunggu Persetujuan</h1>
            <p class="m-0">Pendaftaran Anda sedang di tinjau, mohon tunggu.</p>
        </div>
        <div class="divider my-3"></div>
        <p class="">Nama Lengkap : asd <br>Alamat : asd <br>Nomor Telephone : 123 </p>

        <div class="divider my-3"></div>
        <div class="text-center">
            <h1 class="">Hubungi petugas</h1>
            <div class="my-3 d-flex justify-content-center">
                <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1"><i class="bi bi-whatsapp pe-2 ms-n1"></i> Whatshapp</a>
                <a href="/jasa-saya" class="btn btn-xxs bg-orange-dark shadow-bg-m text-center mx-1"><i class="bi bi-telephone pe-2 ms-n1"></i> Telephone</a>
            </div>
        </div>
    </div>
</div>
@endsection