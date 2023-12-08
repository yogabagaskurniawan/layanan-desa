@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Toko Saya</h2>
</div>
<div class="card card-style overflow-visible" style="margin-top: 80px">
    <div class="mt-n5"></div>
    <div class="text-center">
        <label for="fileInput" class="position-relative">
            <input type="file" id="fileInput" class="visually-hidden">
            <img src="http://layanan-desa.test/user/images/pictures/31t.jpg" alt="img" width="180" class="rounded-circle shadow-l">
            <i class="bi bi-pencil-fill position-absolute bottom-0 bg-white rounded-circle p-3 shadow-sm" style="right: -10px; cursor: pointer;"></i>
        </label>
    </div>
    <div class="mt-3 d-flex justify-content-center">
        <label class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">
            <i class="bi bi-pencil-fill pe-2 ms-n1"></i>Update foto
        </label>
    </div>

    <h1 class="color-theme text-center font-30 pt-3 mb-1">Toko Sembako Jaya Merdeka</h1>
    <p class="text-center font-16 mb-0">Pekalongan</p>
    <div class="content">
        <div class="divider my-3"></div>
        <p>
                By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
        <p>
                By accessing this web site, you are agreeing to be bound by these
            web site Terms and Conditions of Use, all applicable laws and regulations,
            and agree that you are responsible for compliance with any applicable local
            laws. If you do not agree with any of these terms, you are prohibited from
            using or accessing this site. The materials contained in this web site are
            protected by applicable copyright and trade mark law.
        </p>
    </div>
</div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="my-2 d-flex justify-content-center">
                <a href="/toko-edit" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Edit Toko</a>
                <a href="/toko-add" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Tambah Produk</a>
            </div>        
            <div class="col-8 m-auto">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Cari jasa / desa / kota">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
        </div>
        <div class="pb-2"></div>
    </div>
</div>

<div class="row mb-0 mx-1">
    <div class="col-6 col-sm-4 col-lg-3 mb-4">
        <div class="card card-style m-0 rounded-3 position-relative">
            <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-14">Makanan</span>
            <a href="/detail-jasa">
                <img src="http://layanan-desa.test/user/images/pictures/iklan2.jpeg" class="img-fluid">
            </a>
            <!-- Isi card lainnya -->
            <div class="content pb-0 mb-0 text-center">
                <h2 class="text-truncate" style="max-width: 100%;">Sambal Balado</h2>
                <p class="mb-0 font-14"><span class="text-primary font-16">Rp 250.000</span></p>
            </div>
            <!-- Tombol aksi lainnya -->
            <div class="content pb-0 text-center">
                <div class="my-2 d-flex justify-content-center">
                    <div class="row">
                        <div class="col">
                            <a href="/tambah-jasa" class="btn btn-xxs mb-2 bg-yellow-dark shadow-bg-m text-center mx-1">Edit</a>
                            <a href="/jasa-saya" class="btn btn-xxs mb-2 bg-red-dark shadow-bg-m text-center mx-1">Hapus</a>
                            <a href="/jasa-saya" class="btn btn-xxs mb-2 bg-mint-dark shadow-bg-m text-center mx-1">Preview</a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </div>
</div>

@endsection