@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Verifikasi Akun</h2>
</div>

<div class="divider mx-4"></div>

<div class="page-content footer-clear">

    <div class="card card-style">
        <div class="content">
            <div class="form-custom form-label form-icon mb-3 mt-3">
                <input type="text" class="form-control rounded-xs" id="c1">
                <label for="c1" class="color-highlight form-label-always-active">Nama lengkap sesuai KTP</label>
            </div>
            
            <div class="form-custom form-label form-icon mb-3 mt-3">
                <input type="text" class="form-control rounded-xs" id="c1">
                <label for="c1" class="color-highlight form-label-always-active">Alamat sesuai KTP</label>
            </div>
            
            <input class="form-control mb-3 mt-3" name="img" type="file" required="">
            <span style="font-size:12px">Maksimal ukuran foto 3MB</span>

            <div class="divider mt-2 mb-4"></div>
            <a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s">Update</a>

            <!-- End of Tab Wrapper-->
        </div>
    </div>

</div>

@endsection