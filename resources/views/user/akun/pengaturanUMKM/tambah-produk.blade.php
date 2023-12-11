@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Tambah Produk UMKM</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content">
        <form class="demo-animation needs-validation m-0" novalidate="">
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="nama produk"
                    pattern="[A-Za-z ]{1,32}" required="">
                <label for="c1" class="color-theme">Nama Produk</label>
                <div class="valid-feedback">Excellent!
                    <!-- text for field valid-->
                </div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-currency-dollar font-14"></i>
                <input type="tel" class="form-control rounded-xs" id="c3" placeholder="harga produk"
                    pattern="[+ 0-9]{10,15}" required="">
                <label for="c3" class="color-theme">Harga Produk</label>
                <div class="valid-feedback">Cost Number looks good!
                    <!-- text for field valid-->
                </div>
                <div class="invalid-feedback">Cost Number is missing or is invalid.</div>
                <span>(required)</span>
            </div>
            <div class="form-custom mb-3 form-border form-icon form-label">
                <i class="bi bi-window-sidebar font-14"></i>
                <textarea class="form-control rounded-xs" placeholder="deskripsi" id="c7"></textarea>
                <label for="c7" class="color-theme">Deskripsi</label>
                <div class="valid-feedback">HTML5 does not offer Dates Field Validation!
                    <!-- text for field valid-->
                </div>
            </div>
            <div class="file-data">
                <img id="image-data" src="{{ asset('user/images/empty.png') }}" class="img-fluid rounded-s" alt="img">
                <span class="upload-file-name d-block text-center"
                    data-text-before="<i class='bi bi-check-circle-fill color-green-dark pe-2'></i> Image:"
                    data-text-after=" is ready.">
                </span>
                <div class="text-center">
                    <input type="file" class="upload-file" accept="image/*" multiple>
                    <p
                        class="btn btn-xxs text-uppercase rounded-s upload-file-text mb-0 border-blue-dark color-blue-dark">
                        Upload gambar</p>
                    <p style="font-size:12px">Maksimal ukuran foto 3MB Maksimal 3 foto</p>
                </div>
            </div>
            <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                type="submit">Update Produk</button>
        </form>
    </div>
</div>
@endsection
