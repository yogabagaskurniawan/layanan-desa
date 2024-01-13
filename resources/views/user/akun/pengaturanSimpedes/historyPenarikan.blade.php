@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/petugas-simpedes"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">History penarikan</a>
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
            {{-- <h5>Data Nasabah</h5> --}}
            <div class="divider my-2"></div>
            <p style="margin: 0;">Tanggal Deposit : 12-01-2024/p>
            <p style="margin: 0;">Nama Lengkap : Slamet</p>
            <p style="margin: 0;">Alamat : Batang</p>
            <p style="margin: 0;">Nomor Telephone : 085710850889</p>
            <p style="margin: 0;">Total Deposit : 30,000</p>
            <p style="margin: 0;">Petugas Approve : yoga bagas kurniawan-085176720024</p>
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
            <a href="/petugas-simpedes"
            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">History penarikan</h1>
        </div>
    </div>
</div>
<div class="card card-style mx-0 mt-3 pt-3">
    <div class="content mt-0">
        <div class="row justify-content-between pe-0">
            <div class="col-6">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari nama...">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                    {{-- <label for="c1" class="color-theme">Search</label> --}}
                </div>
                
            </div>
            <div class="col-6 ps-0">
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-calendar font-12"></i>
                    <input type="date" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c5" min="2021-01-01" value="2021-06-01">
                    {{-- <label for="c5" class="color-theme">Select a Date</label> --}}
                    <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
                </div>
            </div>
        </div>
        <div class="mx-auto " style="max-width: 576px">
            <div class="border border-blue-dark rounded-xs overflow-hidden">
                <table class="table color-theme border-blue-dark mb-0">
                    <thead class="rounded-s bg-blue-dark border-l">
                        <tr class="color-white">
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Tanggal</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Nama</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Jumlah</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Opsi</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14/06/22</td>
                            <td>Slamet</td>
                            <td>1200000</td>
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