@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h1 class="m-auto">Pengaturan</h1>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="my-2 d-flex justify-content-center">
            <a href="/petugas-bankSampah" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Menu</a>
        </div>   

        <div class="pb-2"></div>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <h4 class="m-auto text-center">Biaya Pengambilan</h4>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom form-label form-icon mb-3">
                <input type="number" class="form-control rounded-xs" id="c3" placeholder="+1 234 567 315" pattern="[+ 0-9]{10,15}" value="10000" required="">
                <label for="c3" class="color-theme">Your Number</label>
                <div class="valid-feedback"> Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback"> Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Update</button>
        </form>
    </div>
</div>

@endsection