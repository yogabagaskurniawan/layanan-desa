@extends('layouts.user.main')
@section('content')
@include('layouts.user.partials.footer-bar')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="me-auto align-self-center">
            <a href="/simpedes" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bi bi-chevron-left color-theme font-14"></i>
            </a>
        </div>
    </div>
</div>
<div class="card card-style mx-0 pb-4 rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
    {{-- <div class="mt-5 pb-3"></div> --}}
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <h3 class="text-center mb-1">Tarik Saldo</h3>
        <p class="mb-0 text-center">Petugas Simpedes akan datang kerumah Anda</p>
        <div class="divider my-2"></div>
        <p class="mb-0 text-center"> Saldo <br><strong class="font-20 color-theme ">Rp. 0</strong> </p>
        <div class="divider mt-2 mb-3"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-icon form-floating">
                <i class="bi bi-currency-dollar font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Jumlah Penarikan</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <p class="text-danger mb-0">Minimal Penarikan Rp 12,345</p>
            </div> 
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-xxs my-4" type="submit">Tarik Saldo</button>
        </form>
        <p class="mb-2 text-center">Penarikan Saldo sebesar Rp 15,000 dalam proses,<br> mohon tunggu petugas kerumah Anda.</p>
        <div class="text-center">
            <h3 class="mb-1">Hubungi petugas</h3>
            <div class="my-3 d-flex justify-content-center">
                <a href="/tambah-jasa" class="btn btn-xxs py-1 bg-mint-dark shadow-bg-m text-center mx-1"><i class="bi bi-whatsapp pe-2 ms-n1"></i> Whatshapp</a>
                <a href="/jasa-saya" class="btn btn-xxs py-1 bg-orange-dark shadow-bg-m text-center mx-1"><i class="bi bi-telephone pe-2 ms-n1"></i> Telephone</a>
            </div>
            <h3 class="mb-3 pt-3">Riwayat Penarikan Saldo</h3>
            <form action="">
                <div class="row justify-content-between pe-0">
                    <div class="col-10">
                        <div class="form-custom mb-3 form-icon form-floating">
                            {{-- <i class="bi bi-calendar font-12"></i> --}}
                            <input type="date" class="form-control rounded-xs" id="c5" min="2021-01-01" value="2021-06-01">
                            <label for="c5" class="color-theme form-label-active">Select a Date</label>
                            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
                        </div>
                    </div>
                    <div class="col-2 ps-0">
                        <button class="icon icon-xl rounded-pill border border-secondary-subtle shadow-bg shadow-bg-xs bg-theme" style="width: 100%; background-color: transparent;">
                            <i class="bi bi-search font-28 text-secondary"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="border border-blue-dark rounded-xs overflow-hidden mt-3">
                <table class="table color-theme border-blue-dark mb-0">
                    <thead class="rounded-s bg-blue-dark border-l">
                        <tr class="color-white">
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Tanggal</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Jumlah</h5>
                            </th>
                            <th scope="col">
                                <h5 class="color-white font-15 mb-0">Status</h5>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11/01/2024 14:37</td>
                            <td>15,000</td>
                            <td><span class="badge bg-danger bg-danger-dark px-2 rounded-s font-12">Pending</span>                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection