@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Pengaturan UMKM</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style mb-3">
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="pt-1">
                <img src="{{ asset('user/images/pictures/11t.jpg') }}" class="img-fluid rounded-s" width="110">
            </div>
            <div class="ps-3 me-auto">
                <h3 class="mb-2">
                    Toge Production
                </h3>
                <p class="mb-1">Phone : 085333333330</p>
                <p class="mb-1">Kota : Batang</p>
                <p class="mb-1">Kecamatan : Tulis</p>
                <p class="mb-1">Desa : Tulis</p>
                <p class="mb-1">Alamat : Jl. Duren</p>
            </div>
        </div>
        <div class="divider mx-4"></div>
        <div class="content pt-0">
            <div class="accordion accordion-s" id="accordion-group-6">
                <div class="accordion-item">
                    <button class="accordion-button collapsed px-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#accordion6-1">
                        <span class="font-600 font-13">Deskripsi</span>
                        <i class="bi bi-arrow-down-short font-20"></i>
                    </button>
                    <div id="accordion6-1" class="accordion-collapse collapse" data-bs-parent="#accordion-group-6">
                        <p class="pb-3 opacity-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
                            ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mx-4"></div>
        <div class="my-2 d-flex justify-content-center">
            <a href="/umkm-edit" class="btn btn-xxs bg-yellow-dark shadow-bg-m text-center mx-1">Edit UMKM</a>
            <a href="/umkm/tambah-produk" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Tambah Produk UMKM</a>
        </div>
    </div>
</div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="Cari Produk di umkm ini" />
            <label for="c1" class="color-theme">Search</label>
        </div>
        <div class="row mb-0">
            <div class="col-6 pe-0 ps-0">
                <div href="#" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        <h4>Toge NonPestisida</h4>
                        <p class="mb-0 font-14"><span class="text-primary font-16">RP. 10.000</span></p>
                        <a class="btn btn-xxs mb-2 bg-mint-dark shadow-bg-m text-center mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#menu-modal-window" href="#">Preview</a>
                        <div class="divider mx-1"></div>
                        <a href="/umkm/edit-produk" class="btn btn-xxs bg-yellow-dark shadow-bg-m ">Edit</a>
                        <a href="#" class="btn btn-xxs bg-red-dark shadow-bg-m ">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="menu-modal-window" style="height: 520px; width: 520px; display: block;"
    class="offcanvas offcanvas-modal rounded-m" aria-modal="true" role="dialog">
    <div class="d-flex m-3">
        <div class="align-self-center">
            <h2 class="font-700 mb-0">Preview Produk</h2>
        </div>
        <div class="align-self-center ms-auto">
            <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
            </a>
        </div>
    </div>
    <div class="content mt-0">
        <div class="card card-style rounded-s m-0 bg-3"
            style="height:180px;background-image: url('{{ asset('user/images/pictures/10m.jpg') }}')"></div>
        <div class="text-center mt-2">
            <h1 class="">Toge NonPestisida</h1>
            <p class="mb-0 font-14">
                <span class="text-primary font-16"> Rp 10.000</span>
            </p>
        </div>
        <div class="divider my-3"></div>
        <div class="align-self-center">
            <h2 class="font-500 mb-0">Deskripsi Produk</h2>
        </div>
        <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quisquam cupiditate porro dicta excepturi
            officiis dolore vel laborum. Eligendi recusandae perferendis velit a illo, voluptatum facere neque aliquid
            hic nihil!
        </p>
    </div>
</div>

@endsection
