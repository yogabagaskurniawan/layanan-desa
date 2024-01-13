@extends('layouts.user.main')

@section('header')
<div class="header-bar header-fixed header-app header-auto-show m-auto" style="max-width: 1000px !important;">
    <a href="/petugas-simpedes"><i class="bi bi-chevron-left font-13"></i></a>
    <a class="header-title">Pengaturan</a>
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
            <h1 class="color-theme mb-0 font-18">Pengaturan</h1>
        </div>
    </div>
</div>
<div class="card card-style mx-0 mt-3 pt-3">
    <div class="content ">
        <div class="mx-auto" style="max-width: 576px">
            <form class="demo-animation needs-validation m-0" novalidate="">
                <div class="form-custom form-label form-icon mb-3">
                    <input type="number" class="form-control rounded-xs" id="c3" placeholder="12345" pattern="[+ 0-9]{10,15}" required="">
                    <label for="c3" class="color-theme form-label-active">Nomor Petugas</label>
                    <div class="valid-feedback"> Number looks good!<!-- text for field valid--></div>
                    <div class="invalid-feedback"> Number is missing or is invalid.</div>
                    <span>(required)</span>
                </div>
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs" type="submit">Update</button>
            </form>
            <form class="demo-animation needs-validation mx-0 my-4" novalidate="">
                <div class="form-custom form-label form-icon mb-3">
                    <input type="number" class="form-control rounded-xs" id="c3" placeholder="12345" pattern="[+ 0-9]{10,15}" required="">
                    <label for="c3" class="color-theme form-label-active">Nomor Deposit</label>
                    <div class="valid-feedback"> Number looks good!<!-- text for field valid--></div>
                    <div class="invalid-feedback"> Number is missing or is invalid.</div>
                    <span>(required)</span>
                </div>
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs" type="submit">Update</button>
            </form>
            <form class="demo-animation needs-validation m-0" novalidate="">
                <div class="form-custom form-label form-icon mb-3">
                    <input type="number" class="form-control rounded-xs" id="c3" placeholder="12345" pattern="[+ 0-9]{10,15}" required="">
                    <label for="c3" class="color-theme form-label-active">Minimal Penarikan</label>
                    <div class="valid-feedback"> Number looks good!<!-- text for field valid--></div>
                    <div class="invalid-feedback"> Number is missing or is invalid.</div>
                    <span>(required)</span>
                </div>
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection