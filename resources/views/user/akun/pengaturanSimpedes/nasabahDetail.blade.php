@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="pt-3 sticky-nav">
  <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
      <div class="me-auto align-self-center">
          <a href="/simpedes-nasabah" class="me-3 ms-0 icon icon-xs bg-theme rounded-s shadow-m">
              <i class="bi bi-chevron-left color-theme font-14"></i>
          </a>
      </div>
  </div>
</div>
<div class="card card-style mx-0 pb-4 rounded-0" style="border-bottom-right-radius: 26px !important;border-bottom-left-radius: 26px !important">
  <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
      <div class="text-center mb-1">
        <h1 class="">Slamet oi oi</h1>
        <p class="mb-0"><span>Telephone : 0895414015102</span></p>
        <p class="mb-0"><span>Alamat : Torogo</span></p>
      </div>
      <div class="divider my-2"></div>
      <p class="mb-0 text-center"> Saldo <br><strong class="font-20 color-theme ">Rp 5,000,000</strong> </p>
      <div class="divider mt-2 mb-3"></div>
      <h4 class="m-auto mb-3 text-center">Deposit Histori</h4>
        <div class="form-custom form-label form-icon mb-3">
            <i class="bi bi-calendar font-12"></i>
            <input type="date" class="form-control rounded-xs" id="c5" min="2021-01-01" value="2021-06-01">
            <label for="c5" class="color-theme">Select a Date</label>
            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
        </div>
        
        <div class="border border-blue-dark rounded-xs overflow-hidden mt-3">
          <table class="table color-theme border-blue-dark mb-0">
              <thead class="rounded-s bg-blue-dark border-l">
                  <tr class="color-white">
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Tanggal</h5>
                      </th>
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Saldo</h5>
                      </th>
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Approved</h5>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>14-06-2022 19:23</td>
                    <td>10,000,000</td>
                    <td>admin-123456789</td>   
                  </tr>
              </tbody>
          </table>
        </div>
        
        <h4 class="m-auto text-center my-3">Deposit Penarikan</h4>
        <div class="form-custom form-label form-icon mb-3">
            <i class="bi bi-calendar font-12"></i>
            <input type="date" class="form-control rounded-xs" id="c5" min="2021-01-01" value="2021-06-01">
            <label for="c5" class="color-theme">Select a Date</label>
            <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
        </div>
        
        <div class="border border-blue-dark rounded-xs overflow-hidden mt-3">
          <table class="table color-theme border-blue-dark mb-0">
              <thead class="rounded-s bg-blue-dark border-l">
                  <tr class="color-white">
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Tanggal</h5>
                      </th>
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Saldo</h5>
                      </th>
                      <th scope="col">
                          <h5 class="color-white font-15 mb-0">Approved</h5>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>14-06-2022 19:23</td>
                    <td>5,000,000</td>
                    <td>admin-123456789</td>  
                  </tr>
              </tbody>
          </table>
        </div>
  </div>
</div>
@endsection