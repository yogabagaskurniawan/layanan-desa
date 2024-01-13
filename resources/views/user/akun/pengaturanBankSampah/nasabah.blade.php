@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/petugas-bankSampah"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Daftar Semua Nasabah</a>
    <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
    <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
    <a href="#"></a>
</div> 
{{-- modal --}}
<div id="menu-top-full"  style="height: 100%; display: block;max-width: 1000px;" class="offcanvas offcanvas-top m-auto" aria-modal="true" role="dialog">
    <div class="d-flex m-3">
        <div class="align-self-center">
            <h2 class="font-700 mb-0">Detail Nasabah</h2>
        </div>
        <div class="align-self-center ms-auto">
            <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
            </a>
        </div>
    </div>
    <div class="content mt-0">
        <div class="align-self-center" style="margin: 0; padding: 0;">
            <h5>Data Nasabah</h5>
            <div class="divider my-2"></div>
            <p style="margin: 0;">Status : Aktif</p>
            <p style="margin: 0;">Nama Lengkap : Slamet</p>
            <p style="margin: 0;">RT : 09</p>
            <p style="margin: 0;">RW : 02</p>
            <p style="margin: 0;">Alamat : Batang</p>
            <p style="margin: 0;">Nomor Telephone : 085710850889</p>
            <div class="d-flex justify-content-center">
                <a href="/simpedes-nasabah-detail" class="btn btn-xxs bg-red-dark shadow-bg-m py-1 my-2">Nonaktifkan Nasabah</a>
            </div>
            <h5 class="mt-2">Data Akun</h5>
            <div class="divider my-2"></div>
            <p style="margin: 0;">Username : Bagas</p>
            <p style="margin: 0;">Nama Lengkap : yoga bagas kurniawan</p>
            <p style="margin: 0;">Alamat : Pekalongan</p>
            <p style="margin: 0;">Nomor Telephone : 085176720024</p>
        </div> 
        <div class="divider my-2"></div>
        <h3 class="text-center mb-2">Hubungi Nasabah</h3>
        <div class="my-3 d-flex justify-content-center">
            <a href="/toko-edit" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1"><i class="bi bi-whatsapp pe-3 ms-n1"></i>Whatsapp </a>
            <a href="/toko-produkAdd" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1"><i class="bi bi-telephone pe-3 ms-n1"></i>Telphone </a>
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
            <a href="/petugas-bankSampah"
            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">Daftar Semua Nasabah</h1>
        </div>
    </div>
</div>
<div class="card card-style mx-0 mt-3 pt-3">
    <div class="content mt-0">
        <div class="row justify-content-between pe-0">
            <div class="col-9">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari nama...">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                    <label for="c1" class="color-theme">Search</label>
                </div>
                
            </div>
            <div class="col-3 ps-0">
                <select class="form-select  rounded-pill border border-secondary fs-6 bg-theme color-theme" style="height: 53px"  id="c6" aria-label="Floating label select example">
                    <option class="color-theme" value="1">10</option>
                    <option class="color-theme" value="2">20</option>
                    <option class="color-theme" value="2">30</option>
                    <option class="color-theme" value="2">40</option>
                    <option class="color-theme" value="2">50</option>
                </select>
            </div>
        </div>
        <div class="mx-auto " style="max-width: 576px">
            <p class="mb-0">Note: Nasabah yang berwarna merah = Nasabah tidak Aktif</p>
            <div class="border border-blue-dark rounded-xs overflow-hidden">
                <table class="table color-theme border-blue-dark mb-0">
                    <thead class="rounded-s bg-blue-dark border-l">
                        <tr class="color-white">
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Nama</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">RT</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">RW</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Opsi</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Slamet</td>
                            <td>01</td>
                            <td>05</td>
                            <td>
                                <a class="badge bg-primary bg-primary-dark px-2 rounded-s font-12" data-bs-toggle="offcanvas" data-bs-target="#menu-top-full" href="#">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection