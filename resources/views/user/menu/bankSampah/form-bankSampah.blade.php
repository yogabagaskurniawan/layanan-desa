@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/menu"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Bank sampah</a>
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
            <h1 class="color-theme mb-0 font-18">Bank sampah</h1>
        </div>
    </div>
</div>
<div class="card card-style mt-3 mx-0 pb-4">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <h3 class="text-center mb-1">Daftar Bank Sampah</h3>
        <div class="divider mx-1 my-2 mb-3"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama lengkap</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-asterisk font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">RT</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-asterisk font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">RW</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-pencil-fill font-12"></i>
                <textarea class="form-control rounded-xs" placeholder="Leave a comment here" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-telephone-fill font-12"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nomer Handphone</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-currency-dollar font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="" value="Rp.20.000" disabled>
                <label for="c1" class="color-theme">Biaya</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
            </div>
            <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-xxs my-4" type="submit">Daftar</button>
        </form>
    </div>
</div>
<div class="card card-style mx-0">
    <div class="content text-center mb-0">
        <h3 class="mb-2">
            Tanjiro
        </h3>
        <p class="mb-0">Jl. Duren RT.1/RW.1 Tulis Batang</p>
        <p class="mb-0">Biaya Penanganan Rp.10,000</p>
    </div>
    <div class="divider mx-1 my-2"></div>
    <h3 class="text-center mt-2">Status <span class="badge bg-success rounded-s px-2 mb-1 mx-2 font-12" style="vertical-align: middle;">Aktif</span></h3>
    <div class="content text-center mt-3">
        <h3 class="mb-2">Histori Pengambilan Sampah</h3>
        <div class="mx-auto" style="max-width: 576px">
            <div class="border border-blue-dark rounded-xs overflow-hidden">
                <table class="table color-theme border-blue-dark mb-0">
                    <thead class="rounded-s bg-blue-dark border-l">
                        <tr class="color-white">
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Tanggal</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Pengambil</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1/2/23</td>
                            <td>Tisna</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
