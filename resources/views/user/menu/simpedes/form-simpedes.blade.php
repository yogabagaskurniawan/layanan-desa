@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Simpedes</a>
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
            <h1 class="color-theme mb-0 font-18">Simpedes</h1>
        </div>
    </div>
</div>
<div class="card card-style mt-3 mx-0 pb-4">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <h3 class="text-center mb-1">Daftar Simpan Pinjam Desa</h3>
        <p class="mb-0 text-center">Untuk menjadi Nasabah silahkan lakukan pendaftaran di bawah ini..</p>
        <div class="content">
            <div class="divider my-2"></div>
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
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs mt-3" type="submit">Daftar</button>
            </form>
        </div>
    </div>
</div>
<div class="card card-style mt-3 mx-0 pb-4">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <div class="content mt-0">
            <h3 class="text-center mb-1">Menunggu Persetujuan</h3>
            <p class="mb-0 text-center">Pendaftaran Anda sedang di tinjau, mohon tunggu..</p>
            <div class="divider my-2"></div>
            <p class="mb-0">Nama Lengkap : asd <br>Alamat : asd <br>Nomor Telephone : 123 </p>
            <div class="divider my-2"></div>
            <div class="text-center">
                <h3 class="text-center mb-1">Hubungi petugas</h3>
                <div class="my-3 d-flex justify-content-center">
                    <a href="/tambah-jasa" class="btn btn-xxs py-1 bg-mint-dark shadow-bg-m text-center mx-1"><i class="bi bi-whatsapp pe-2 ms-n1"></i> Whatshapp</a>
                    <a href="/jasa-saya" class="btn btn-xxs py-1 bg-orange-dark shadow-bg-m text-center mx-1"><i class="bi bi-telephone pe-2 ms-n1"></i> Telephone</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-style mt-3 mx-0 pb-4">
    <div class="content mt-4">
        <h3 class="text-center mb-3">Simpan Pinjam Desa</h3>
        <p class="mb-0 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="card mt-3 card-style bg-17 shadow-card shadow-card-m mx-0" style="height:250px; background-image: url('{{ asset('user/images/pictures/bg2.jpeg') }}')">
            <div class="card-center mt-2">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-24">
                        <span class="font-14 d-block mb-n2 opacity-60 font-400">Saldo Kamu</span>
                        Rp 26.000
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace lh-1">ASD <br><span class="font-13">08231348899</span><br><span class="font-13">JL. Sumarno Gg.4</span></strong>
            <strong class="card-bottom p-3 text-start color-white font-monospace">                    
                <a href="/tambah-saldo" class="btn btn-xxs py-1 bg-mint-dark shadow-bg-m text-center mx-1" style="z-index: 999999"><i class="bi bi-plus-circle-fill pe-2 ms-n1"></i> Isi Saldo</a>
                <a href="/tarik-saldo" class="btn btn-xxs ms-auto py-1 bg-orange-dark shadow-bg-m text-center mx-1"><i class="bi bi-arrow-down-circle-fill pe-2 ms-n1"></i> Tarik Saldo</a>
            </strong>
            <div class="card-overlay bg-black opacity-50"></div>
        </div>
        {{-- <p class="mb-0 text-center"> <strong class="font-20 color-black ">asd</strong>  <br>Telephone : 123 <br>Alamat : Tulis, batang </p>
        <p class="mb-0 text-center"> Saldo <br><strong class="font-20 color-black ">Rp. 0</strong> </p>
        <div class="divider my-2"></div>
        <div class="row  mt-2">
            <div class="col-12 text-center">
                <h2>Menu</h2>
            </div>
            <div class="col-6">
                <a href="/simpedes-deposit">
                <div class="feature-card mx-auto text-center">
                    <img src="http://127.0.0.1:8000/user/images/deposit-simpedes.png" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                    <p class="mb-0">Deposit</p>
                </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/simpedes-penarikan">
                    <div class="feature-card mx-auto text-center">
                        <img src="http://127.0.0.1:8000/user/images/deposit-simpedes.png" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                        <p class="mb-0">Penarikan</p>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>
</div>
@endsection