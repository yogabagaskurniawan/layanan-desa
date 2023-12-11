@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m mb-0">
    <h2 class="m-auto">Pengaturan Wisata</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="my-2 d-flex justify-content-center">
            {{-- <a href="/umkm-edit" class="btn btn-xxs bg-yellow-dark shadow-bg-m text-center mx-1">Edit UMKM</a> --}}
            <a href="/wisata/tambah-wisata" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Tambah Data Wisata</a>
        </div>
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="Cari Wisata" />
            <label for="c1" class="color-theme">Search</label>
        </div>
        <div class="row mb-0">
            <div class="col-6 pe-0 ps-0">
                <div href="#" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        {{-- <p class="font-900 mb-0 text-truncate" href="#" style="max-width: 150px;">Toge NonPestisida</p> --}}
                        <h5>Curug Genting</h5>
                        <p class="mb-0">Jam Buka / Tutup :</p>
                        <p class="mb-0">08.00 - 17.00</p>
                        <a class="btn btn-xxs mb-2 bg-mint-dark shadow-bg-m text-center mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#menu-modal-window" href="#">Preview</a>
                        <div class="divider mx-1"></div>
                        <a href="/wisata/edit-wisata" class="btn btn-xxs bg-yellow-dark shadow-bg-m ">Edit</a>
                        <a href="#" class="btn btn-xxs bg-red-dark shadow-bg-m ">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-0 ps-0">
                <div href="#" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        {{-- <p class="font-900 mb-0 text-truncate" href="#" style="max-width: 150px;">Toge NonPestisida</p> --}}
                        <h5>Curug Genting</h5>
                        <p class="mb-0">Jam Buka / Tutup :</p>
                        <p class="mb-0">08.00 - 17.00</p>
                        <a class="btn btn-xxs mb-2 bg-mint-dark shadow-bg-m text-center mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#menu-modal-window" href="#">Preview</a>
                        <div class="divider mx-1"></div>
                        <a href="/wisata/edit-wisata" class="btn btn-xxs bg-yellow-dark shadow-bg-m ">Edit</a>
                        <a href="#" class="btn btn-xxs bg-red-dark shadow-bg-m ">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-0 ps-0">
                <div href="#" class="card card-style me-2 ms-2">
                    <img src="{{asset('user/images/pictures/10m.jpg')}}" class="card-img-top img-fluid"
                        alt="Card Image">
                    <div class="content pb-0">
                        {{-- <p class="font-900 mb-0 text-truncate" href="#" style="max-width: 150px;">Toge NonPestisida</p> --}}
                        <h5>Curug Genting</h5>
                        <p class="mb-0">Jam Buka / Tutup :</p>
                        <p class="mb-0">08.00 - 17.00</p>
                        <a class="btn btn-xxs mb-2 bg-mint-dark shadow-bg-m text-center mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#menu-modal-window" href="#">Preview</a>
                        <div class="divider mx-1"></div>
                        <a href="/wisata/edit-wisata" class="btn btn-xxs bg-yellow-dark shadow-bg-m ">Edit</a>
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
            <h2 class="font-700 mb-0">Preview Wisata</h2>
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
            <h1 class="">Curug Genting</h1>
            {{-- <p class="mb-0 font-14">
                <span class="text-primary font-16">Curug Genting</span>
            </p> --}}
            <p class="mb-0">Batang</p>
            <p class="mb-0">Jam Buka / Tutup :</p>
            <p class="mb-0">08.00 - 17.00</p>
        </div>
        <div class="divider my-3"></div>
        <div class="align-self-center">
            <h2 class="font-500 mb-0">Deskripsi </h2>
        </div>
        <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quisquam cupiditate porro dicta excepturi
            officiis dolore vel laborum. Eligendi recusandae perferendis velit a illo, voluptatum facere neque aliquid
            hic nihil!
        </p>
    </div>
</div>

@endsection