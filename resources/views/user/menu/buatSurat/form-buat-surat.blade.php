@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Buat Surat</h2>
</div>

<div class="divider mx-4"></div>


<div class="card card-style">
    <div class="content">
            <p class="mb-0">
            Lorem ipsum dolor sit amet,
            consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="divider mx-4"></div>
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-floating form-icon form-border">
                <i class="bi bi-check-circle font-13"></i>
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected="">Pilih jenis surat</option>
                    <option value="1">Surat tanah</option>
                    <option value="2">Surat ijin</option>
                    <option value="3">Surat pernikahan</option>
                </select>
                <label for="c6" class="color-theme">Select an Option</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-pencil-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="NIK ktp" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Nomor NIK</label>
                <div class="valid-feedback">NIK Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">NIK Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="Nama Lengkap" pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama Loker</label>
                <div class="valid-feedback">Excellent!<!-- text for field valid--></div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-file-earmark-plus font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="Masukan Alamat" id="c7"></textarea>
                <label for="c7" class="color-theme">Alamat</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-telephone-fill font-12"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="no telpon" pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Your Phone</label>
                <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>

            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-window-sidebar font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="Descripsi yang sesuai" id="c7"></textarea>
                <label for="c7" class="color-theme">Your Description</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
            </div>
            
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Buat</button>
        </form>
    </div>
</div>

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Histori pembuatan Surat</h2>
</div>

<div class="divider mx-4"></div>

<div class="card overflow-visible card-style">
    <div class="content mb-0">
        <div class="table-responsive">
            <table class="table color-theme mb-2">
            <thead>
                <tr>
                  <th class="border-fade-blue" scope="col">Tanggal</th>
                  <th class="border-fade-blue" scope="col">Jenis</th>
                  <th class="border-fade-blue" scope="col">Detail</th>
                  <th class="border-fade-blue text-center" scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-fade-blue">
                  <td class="border-0">12.00</td>
                  <td class="border-0">Surat tanah</td>
                  <td>
                      <a class="list-group-item btn btn-xxs bg-blue-dark" data-bs-toggle="offcanvas" data-bs-target="#menu-modal-window" href="#">
                        Detail
                      </a>
                  </td>
                  {{-- <td>
                    <a href="#" class="btn btn-xxs bg-blue-dark">Detail</a>
                  </td> --}}
                  <td class="text-center">
                    <a href="#" class="btn btn-xxs gradient-red">Menunggu</a>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>

<div id="menu-modal-window" style="height: 380px; width: 320px; display: block;" class="offcanvas offcanvas-modal rounded-m show">
    <div class="header-bar header-center shadow-m">
        <h2 class="m-auto">Detail surat</h2>
        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="d-flex m-3">
        <div class="align-self-center" style="margin: 0; padding: 0;">
            <p style="margin: 0;">Nik : 7887397937375973</p>
            <p style="margin: 0;">Nama Lengkap : Apple sgsgs</p>
            <p style="margin: 0;">Alamat : Batang</p>
            <p style="margin: 0;">Nomor Telephone : 085710850889</p>
            <p style="margin: 0;">Deskripsi : mantap</p>
        </div>   
    </div>

    <div id="footer-bar"xl>
        <a class="col btn btn-full btn-l btn-3d bg-mint-light border-green-dark text-center"><i class="bi bi-whatsapp pe-3 ms-n1"></i>Chat </a>
        <a class="col btn btn-full btn-l btn-3d bg-orange-light border-red-dark text-center"><i class="bi bi-telephone pe-3 ms-n1"></i>Hubungi </a>
    </div>
</div>


@endsection