@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Pendaftaran Nasabah Baru</h2>
</div>

<div class="divider mx-3"></div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="my-2 d-flex justify-content-center">
            <a href="/petugas-simpedes" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Menu</a>
        </div>   

        <div class="pb-2"></div>
    </div>
</div>

<div class="card card-style">
    <div class="content mb-0">
        <div class="row">
            <div class="col-4 form-custom">
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    {{-- <option selected="">pilih</option> --}}
                    <option value="1">10</option>
                    <option value="2">20</option>
                    <option value="2">30</option>
                    <option value="2">40</option>
                    <option value="2">50</option>
                </select>
            </div>
            <div class="col-8">
                <div class="form-custom form-label no-icon mb-3">
                    <input type="text" class="form-control rounded-xs fs-6" id="c1" placeholder="Pencarian">
                    <label for="c1" class="color-theme ">Search</label>
                </div>
            </div>
        </div>
        
        <div class="pb-2"></div>
    </div>
</div>

<div class="card overflow-visible card-style">
    <div class="content mb-0">
        <div class="table-responsive">
            <table class="table color-theme mb-2">
            <thead>
                <tr>
                  <th class="border-fade-blue" scope="col">Nama</th>
                  <th class="border-fade-blue" scope="col">Alamat</th>
                  <th class="border-fade-blue" scope="col">Jumlah</th>
                  <th class="border-fade-blue text-center" scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-fade-blue">
                  <td class="border-0">Slamet</td>
                  <td class="border-0">kendal</td>
                  <td class="border-0">1000000</td>
                  <td class="text-center">
                      <a class="list-group-item btn btn-xxs bg-blue-dark" data-bs-toggle="offcanvas" data-bs-target="#menu-modal-window" href="#">
                        Detail
                      </a>
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

<div id="menu-modal-window" style="height: 300px; width: 320px; display: block;" class="offcanvas offcanvas-modal rounded-m ">
    <div class="header-bar header-center shadow-m">
        <h2 class="m-auto">Detail Nasabah</h2>
        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="d-flex m-3">
        <div class="align-self-center" style="margin: 0; padding: 0;">
            <hr>
            <p style="margin: 0;">Tanggal Deposit : 14-06-2022</p>
            <p style="margin: 0;">Nama Lengkap : Slamet</p>
            <p style="margin: 0;">Alamat : Batang</p>
            <p style="margin: 0;">Nomor Telephone : 085710850889</p>
            <p style="margin: 0;">Petugas Approve : admin-123456789</p>
            <hr>
        </div> 
    </div>   
</div>

@endsection