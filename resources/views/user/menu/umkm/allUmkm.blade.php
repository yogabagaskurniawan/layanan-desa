@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar')

<div class="card card-style">
    <div class="content mb-0">
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="Cari UMKM" data-search />
            <label for="c1" class="color-theme">Search</label>
            {{-- <span>(required)</span> --}}
        </div>
        <div class="row mb-0">
            <div class="col-6 pe-0 ps-0">
                <div href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content mb-0 pb-0">
                        <h5 class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Toge Production</h5>
                            <p class="mb-0">Batang</p>
                            <p class="mb-1">Tulis</p>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <a href="/umkm-detail" class="btn btn-xxl bg-green-dark mx-1 pb-0 pt-0 mb-2">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection