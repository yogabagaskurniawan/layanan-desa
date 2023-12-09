@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="card card-style">
    <div class="content text-center">
        <h3 class="mb-2">
            Tanjiro
        </h3>
        <p class="mb-0">Alamat : Jl. Duren RT.1/RW.1</p>
        <p class="mb-0">Desa : Tulis</p>
        <p class="mb-0">Kecamatan : Tulis</p>
        <p class="mb-0">Kota : Batang</p>
        <p class="mb-0">Notice: Biaya Penanganan Rp.10,000</p>
    </div>
    <div class="divider mx-1 my-2"></div>
    <h3 class="text-center mb-3">
        Status
        <mark class="highlight ps-2 font-12 pe-2 bg-green-dark px-2 py-1" style="margin-left: 5px;">Aktif</mark>
        {{-- <mark class="highlight ps-2 font-12 pe-2 bg-red-dark px-2 py-1" style="margin-left: 5px;">Nonaktif</mark> --}}
    </h3>
</div>
<div class="card overflow-visible card-style">
    <div class="content text-center">
        <h3 class="mb-2">Histori Pengambilan Sampah</h3>
        <div class="border border-blue-dark rounded-s overflow-hidden">
            <table class="table color-theme border-blue-dark mb-0">
                <thead class="rounded-s bg-blue-dark border-l">
                    <tr class="color-white">
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Tanggal</h5>
                        </th>
                        <th scope="col">
                            <h5 class="color-white font-15 mb-0">Pengambil</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1/2/23</td>
                        <td>Tisna</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
