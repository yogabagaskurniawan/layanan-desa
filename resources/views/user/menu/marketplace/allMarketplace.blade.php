@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="card card-style">
    <div class="content mb-0">
        <h2 class="justify-content-center text-center pt-3">Marketplace</h2>
        <div class="divider mx-1 my-2"></div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari produk">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
            <div class="col-6 form-custom">
                <select class="form-select rounded-xxs" id="c6" aria-label="Floating label select example">
                    <option selected="">Terbaru</option>
                    <option value="1">Terlama</option>
                    <option value="2">Urutkan</option>
                </select>
            </div>
            <div class="col-6 form-custom">
                <select class="form-select rounded-xxs" id="c6" aria-label="Floating label select example">
                    <option selected="">Kategori</option>
                    <option value="1">Makanan</option>
                    <option value="2">Pakaian</option>
                    <option value="2">Elektronik</option>
                </select>
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-6 col-sm-4 col-lg-3  pe-0 ps-0">
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
            <div class="col-6 col-sm-4 col-lg-3  pe-0 ps-0">
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
            <div class="col-6 col-sm-4 col-lg-3  pe-0 ps-0">
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
