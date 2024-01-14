@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Buat surat</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div>

{{-- modal --}}
<div id="menu-modal-window" style="height: 480px; width: 300px; display: block;" class="offcanvas offcanvas-modal rounded-m ">
    <div class="header-bar header-center shadow-m">
        <h2 class="m-auto">Detail Surat</h2>
        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="d-flex m-3">
        <div class="content mt-0">
        <div class="align-self-center" style="margin: 0; padding: 0;">
            <p style="margin: 0;">Nik : 7887397937375973</p>
            <p style="margin: 0;">Nama Lengkap : Apple sgsgs</p>
            <p style="margin: 0;">Alamat : Batang</p>
            <p style="margin: 0;">Nomor Telephone : 085710850889</p>
            <p style="margin: 0;">Deskripsi : mantap</p>
        </div> 
        <hr>
        <h3 class="text-center mb-2">Surat telah dicetak</h3>
        <h3 class="text-center mb-2">Hubungi Petugas</h3>
        <div class="my-2 d-flex justify-content-center">
            <a href="" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1"><i class="bi bi-whatsapp pe-3 ms-n1"></i>Whatsapp </a>
            <a href="" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1"><i class="bi bi-telephone pe-3 ms-n1"></i>Telphone </a>
        </div>
        </div>
    </div>
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
            <h1 class="color-theme mb-0 font-18">Buat surat</h1>
        </div>
    </div>
</div>

<div class="card card-style mt-3 mx-0 pb-4">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <p class="mb-0 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="divider mx-1 my-2 mb-3"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-floating form-icon form-border">
                <i class="bi bi-check-circle font-13"></i>
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected="">Pilih jenis surat</option>
                    <option value="1">Surat tanah</option>
                    <option value="2">Surat ijin</option>
                    <option value="3">Surat pernikahan</option>
                </select>
                <label for="c6" class="color-theme">Select an Option</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-pencil-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="NIK ktp" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor NIK</label>
                <div class="valid-feedback">NIK Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">NIK Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="Nama Lengkap" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama Loker</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-file-earmark-plus font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="Masukan Alamat" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
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

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-window-sidebar font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="Descripsi yang sesuai" id="c7"></textarea>
                <label for="c7" class="color-theme">Your Description</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs mt-4" type="submit">Buat</button>
        </form>
        <h3 class="mb-3 pt-5 text-center">Riwayat Pembuatan Surat</h3>
        <div class="border border-blue-dark rounded-xs overflow-hidden mt-3">
            <table class="table color-theme border-blue-dark mb-0">
                <thead class="rounded-s bg-blue-dark border-l">
                    <tr class="color-white">
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Tanggal</h5>
                        </th>
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Jenis</h5>
                        </th>
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Detail</h5>
                        </th>
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Status</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11/01/2024 14:37</td>
                        <td>Surat tanah</td>
                        <td><a data-bs-toggle="offcanvas" data-bs-target="#menu-modal-window" href="#" class="badge bg-primary bg-primary-dark px-2 rounded-s font-12">Detail</a>                            </td>
                        <td><span class="badge bg-danger bg-danger-dark px-2 rounded-s font-12">Menunggu</span>                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection