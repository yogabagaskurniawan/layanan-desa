@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="card card-style">
    <div class="content">
        <div class="text-center">
            <h1 class="">Slamet oi oi</h1>
            <p class="mb-0 font-14"><span>Telephone : 0895414015102</span></p>
            <p class="mb-0 font-14"><span>Alamat : Torogo</span></p>
        </div>
        <div class="divider my-3"></div>
        <h5 class="text-center">Rp 5,000,000</h5>
    </div>
</div>

<div class="card card-style">
  <div class="content mb-0">
      <div class="my-2 d-flex justify-content-center">
          <a href="/petugas-simpedes" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Menu</a>
      </div>   

      <div class="pb-2"></div>
  </div>
</div>

<div class="card overflow-visible card-style">
    <div class="content mb-0">
        <h4 class="m-auto text-center">Deposit Histori</h4>
        <div class="form-custom form-label form-icon mb-3">
            <i class="bi bi-calendar font-12"></i>
            <input type="date" class="form-control rounded-xs" id="c5" min="2021-01-01" value="2021-06-01">
            <label for="c5" class="color-theme">Select a Date</label>
            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table color-theme mb-2">
            <thead>
                <tr>
                  <th class="border-fade-blue" scope="col">Tanggal</th>
                  <th class="border-fade-blue" scope="col">Saldo</th>
                  <th class="border-fade-blue text-center" scope="col">Approved</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-fade-blue">
                  <td>14-06-2022 19:23</td>
                  <td>10,000,000</td>
                  <td class="text-center"></i>admin-123456789</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card overflow-visible card-style">
    <div class="content mb-0">
        <h4 class="m-auto text-center">Deposit Penarikan</h4>
        <div class="form-custom form-label form-icon mb-3">
            <i class="bi bi-calendar font-12"></i>
            <input type="date" class="form-control rounded-xs" id="c5" min="2021-01-01" value="2021-06-01">
            <label for="c5" class="color-theme">Select a Date</label>
            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table color-theme mb-2">
            <thead>
                <tr>
                  <th class="border-fade-blue" scope="col">Tanggal</th>
                  <th class="border-fade-blue" scope="col">Saldo</th>
                  <th class="border-fade-blue text-center" scope="col">Approved</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-fade-blue">
                  <td>14-06-2022 19:23</td>
                  <td>5,000,000</td>
                  <td class="text-center"></i>admin-123456789</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection