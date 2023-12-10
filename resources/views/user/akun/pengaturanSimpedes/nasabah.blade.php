@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Daftar Semua Nasabah</h2>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
  <div class="content mb-0">
      <div class="my-2 d-flex justify-content-center">
          <a href="/petugas-simpedes" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Menu</a>
      </div>   

      <div class="pb-2"></div>
      <div class="row">
          <div class="col-12">
              <div class="form-custom form-label no-icon mb-3">
                  <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Pencarian Nasabah">
                  <label for="c1" class="color-theme ">Search</label>
              </div>
          </div>
      </div>
      
      <div class="pb-2"></div>
      <div class="table-responsive">
          <table class="table color-theme mb-2">
          <thead>
              <tr>
                <th class="border-fade-blue" scope="col">Nama</th>
                <th class="border-fade-blue" scope="col">Saldo</th>
                {{-- <th class="border-fade-blue" scope="col">Detail</th> --}}
                <th class="border-fade-blue text-center" scope="col">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-fade-blue">
                <td class="border-0">Slamet</td>
                <td class="border-0">0</td>
                <td class="text-center">
                  <a href="/simpedes-nasabah-detail" class="btn btn-xxs bg-blue-dark">Detail</a>
                </td>
                
                {{-- <td class="text-center">
                  <a href="#" class="btn btn-xxs gradient-red">Detail</a>
                </td> --}}
              </tr>
            </tbody>
          </table>
      </div>
  </div>
</div>
@endsection