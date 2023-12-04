@extends('layouts.user.main')

@section('content')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">List Kurir</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">        
        <div class="d-flex mb-3">
            <div class="mt-1">
                <h1 class="mb-0">Kurir Lokal</h1>
            </div>
        </div>

        <div class="divider"></div>

        <div class="d-flex mb-4">
            <div>
                <img src="{{ asset('user/images/pictures/kurir1.jpeg') }}" width="110" class="rounded-s shadow-xl">
            </div>
            <div class="ps-3 w-100">
                <div class="row align-items-center">
                    <h3 class="col-6 mb-0">Rahmat Khamid</h3>
                    <h5 class="col-6 text-end mb-0 font-14 font-400"><p class="bg-green-dark px-1 rounded-s d-inline-block">Aktif</p></h5>
                </div>
                <p class="mb-0  font-11">Kandeman</p>
                <div class="pb-1"></div>
                <a href="#" class="btn btn-xxs gradient-mint"><i class="bi bi-whatsapp"></i>  Whatshapp</a>
            </div>
        </div>

        <div class="d-flex mb-4">
            <div>
                <img src="{{ asset('user/images/pictures/kurir2.jpeg') }}" width="110" class="rounded-s shadow-xl">
            </div>
            <div class="ps-3 w-100">
                <div class="row align-items-center">
                    <h3 class="col-6 mb-0">Adi Bejo</h3>
                    <h5 class="col-6 text-end mb-0 font-14 font-400"><p class="bg-red-dark px-1 rounded-s d-inline-block">Tidak Aktif</p></h5>
                </div>
                <p class="mb-0  font-11">Pencalungan</p>
                <div class="pb-1"></div>
                <a href="#" class="btn btn-xxs gradient-mint"><i class="bi bi-whatsapp"></i>  Whatshapp</a>
            </div>
        </div>

        <div class="d-flex mb-3 mt-5">
            <div class="mt-1">
                <h1 class="mb-0">Kurir Desa Lain</h1>
            </div>
        </div>

        <div class="divider"></div>

        <div class="d-flex mb-4">
            <div>
                <img src="{{ asset('user/images/pictures/kurir3.jpeg') }}" width="110" class="rounded-s shadow-xl">
            </div>
            <div class="ps-3 w-100">
                <div class="row align-items-center">
                    <h3 class="col-6 mb-0">Sri Tina</h3>
                    <h5 class="col-6 text-end mb-0 font-14 font-400"><p class="bg-green-dark px-1 rounded-s d-inline-block">Aktif</p></h5>
                </div>
                <p class="mb-0  font-11">Subah</p>
                <div class="pb-1"></div>
                <a href="#" class="btn btn-xxs gradient-mint"><i class="bi bi-whatsapp"></i>  Whatshapp</a>
            </div>
        </div>
    </div>
</div>
@endsection