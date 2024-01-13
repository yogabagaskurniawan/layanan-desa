@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/petugas-simpedes"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Daftar semua nasabah</a>
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
            <a href="/petugas-simpedes"
            class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
        <div class="align-self-center me-auto">
            <h1 class="color-theme mb-0 font-18">Daftar semua nasabah</h1>
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
                    {{-- <label for="c1" class="color-theme">Search</label> --}}
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
            <div class="border border-blue-dark rounded-xs overflow-hidden">
                <table class="table color-theme border-blue-dark mb-0">
                    <thead class="rounded-s bg-blue-dark border-l">
                        <tr class="color-white">
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Nama</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Saldo</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Opsi</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Slamet</td>
                            <td>Rp 3.000</td>
                            <td>
                                <a class="badge bg-primary bg-primary-dark px-2 rounded-s font-12" href="/simpedes-nasabah-detail">
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