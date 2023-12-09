@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="card card-style">
    <h2 class="justify-content-center text-center pt-3">Layanan Desa</h2>
    <div class="divider mx-1 my-2"></div>
    {{-- <div class="content"> --}}
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
</div>
@endsection