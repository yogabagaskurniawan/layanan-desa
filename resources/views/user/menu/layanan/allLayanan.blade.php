@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Layanan Desa</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
        <div class="row">
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari UMKM">
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
        <div class="divider mx-4"></div>
        <div class="card card-style mb-3">
            <div class="content">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="pt-1">
                        <img src="{{ asset('user/images/pictures/11t.jpg') }}" class="img-fluid rounded-s" width="110">
                    </div>
                    <div class="ps-3 me-auto">
                        <p class="mb-0">Kota : Batang</p>
                        <p class="mb-0">Desa : Tulis</p>
                        <h3 class="mb-2">
                            APBD Desa
                        </h3>
                    </div>
                    <div>
                        <a href="/detail-layanan" class="btn btn-xs  btn bg-blue-dark">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div @endsection
