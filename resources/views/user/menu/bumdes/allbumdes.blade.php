@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="row">
    <div class="col-8">
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari jasa / desa / kota">
            <label for="c1" class="color-theme ">Search</label>
        </div>
    </div>
    <div class="col-4 form-custom">
        <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
            <option selected="">Terbaru</option>
            <option value="1">Terlama</option>
            <option value="2">Urutkan</option>
        </select>
    </div>
</div>

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Bumdes</h2>
</div>
<div class="divider mx-3"></div>

<div class="row me-0 ms-0 mb-0">
    <div class="col-4 ps-0 pe-0">
        <div class="card card-style">
            <a href="/detail-bumdes">
                <img src="{{ asset('user/images/pictures/23.jpg') }}" class="img-fluid">
            </a>
            <div class="content pb-0">
                <p class="mb-0 text-center">bumdes 1.</p>
                <p class="mb-0 text-center"style="color: green;font-size:18px;">Batang.</p>
                <p class="mb-0 text-center">desa satu.</p>
                <p class="mb-0 text-center"style="color: blue;font-size:22px;">Rp.10000</p>
            </div>
        </div>
    </div>

    <div class="col-4 pe-0 ps-0">
        <div class="card card-style">
            <a href="/detail-bumdes">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0">
                <p class="mb-0 text-center">bumdes 2.</p>
                <p class="mb-0 text-center"style="color: green;font-size:18px;">tulis.</p>
                <p class="mb-0 text-center">desa satu.</p>
                <p class="mb-0 text-center"style="color: blue;font-size:22px;">Rp.20000</p>
            </div>
        </div>
    </div>

    <div class="col-4 pe-0 ps-0">
        <div class="card card-style">
            <a href="/detail-bumdes">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0">
                <p class="mb-0 text-center">bumdes 3.</p>
                <p class="mb-0 text-center"style="color: green;font-size:18px;">subah.</p>
                <p class="mb-0 text-center">desa satu.</p>
                <p class="mb-0 text-center"style="color: blue;font-size:22px;">Rp.30000</p>
            </div>
        </div>
    </div>

    <div class="col-4 pe-0 ps-0">
        <div class="card card-style">
            <a href="/detail-bumdes">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0">
                <p class="mb-0 text-center">bumdes 3.</p>
                <p class="mb-0 text-center"style="color: green;font-size:18px;">subah.</p>
                <p class="mb-0 text-center">desa satu.</p>
                <p class="mb-0 text-center"style="color: blue;font-size:22px;">Rp.30000</p>
            </div>
        </div>
    </div>

    <div class="col-4 pe-0 ps-0">
        <div class="card card-style">
            <a href="/detail-bumdes">
                <img src="{{ asset('user/images/pictures/24.jpg')}}" class="img-fluid">
            </a>
            <div class="content pb-0">
                <p class="mb-0 text-center">bumdes 3.</p>
                <p class="mb-0 text-center"style="color: green;font-size:18px;">subah.</p>
                <p class="mb-0 text-center">desa satu.</p>
                <p class="mb-0 text-center"style="color: blue;font-size:22px;">Rp.30000</p>
            </div>
        </div>
    </div>
</div>
@endsection