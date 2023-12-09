@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar')

<div class="card card-style">
    <div class="content mb-0">
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="Cari Produk" data-search />
            <label for="c1" class="color-theme">Search</label>
            {{-- <span>(required)</span> --}}
        </div>
        <div class="row mb-0">
            <div class="col-6 pe-0 ps-0">
                <a href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        <p class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5>RP. 9.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
            <div class="col-6 pe-0 ps-0">
                <a href="/marketplace/detail-produk" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/marketplace-1.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        <p class="font-900 mb-0 text-truncate" href="/marketplace/detail-produk"
                            style="max-width: 150px;">Asus ROG Phone 7 Ultimate 16/512 12/256 8/256 Not Rog Phone 6 Pro
                            - 7 8/256 Promo </p>
                        <h5>RP. 9.000.000</h5>
                        <p class="card-text">DesaSatu</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
