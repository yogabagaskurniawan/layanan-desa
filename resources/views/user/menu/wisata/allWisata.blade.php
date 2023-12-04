@extends('layouts.user.main')

@section('content')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Wisata Desa</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="form-custom form-label no-icon mb-3">
            <input type="text" class="form-control rounded-xs" id="c1" placeholder="Cari nama wisata / nama desa">
            <label for="c1" class="color-theme">Search</label>
            <span>(required)</span>
        </div>
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:200px;background-image: url('{{ asset('user/images/pictures/wisata1.jpeg') }}')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a class="color-theme" href="#balance3" aria-controls="balance2">Detail Wisata</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Museum Sultan Mahmud Badaruddin</strong>
            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang Desa Satu <br> Jam Operasional : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">14:02 / 4:31</p></strong></strong>
            {{-- <strong class="card-bottom no-click p-3 text-start color-white font-monospace">Jam Operasional : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">14:02 / 4:31</p></strong></strong> --}}
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:200px;background-image: url('{{ asset('user/images/pictures/wisata2.jpeg') }}')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a class="color-theme" href="#balance3" aria-controls="balance2">Detail Wisata</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Museum Sultan Mahmud Badaruddin</strong>
            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang Desa Satu</strong>
            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">Jam Operasional : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">14:02 / 4:31</p></strong></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
        <div class="card card-style bg-5 shadow-card shadow-card-l" style="height:200px;background-image: url('{{ asset('user/images/pictures/wisata3.jpeg') }}')">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-13 my-n1">
                        <a class="color-theme" href="#balance3" aria-controls="balance2">Detail Wisata</a>
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-20 p-3 color-white font-monospace">Museum Sultan Mahmud Badaruddin</strong>
            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">Kota Batang Desa Satu</strong>
            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">Jam Operasional : <strong class="col-6 text-end mb-0 font-14 font-400"><p class="bg-orange-dark px-1 rounded-s d-inline-block">14:02 / 4:31</p></strong></strong>
            <div class="card-overlay bg-black opacity-30"></div>
        </div>
        <div class="pb-2"></div>
    </div>
</div>
@endsection