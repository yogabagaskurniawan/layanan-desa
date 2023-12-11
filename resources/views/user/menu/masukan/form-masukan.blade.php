@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="card card-style">
    <div class="container mt-4">
        <h3 class="text-center mb-1">Buat Saran / Masukan</h3>
        <div class="divider mx-1 my-2 mb-3"></div>
        <form class="demo-animation needs-validation m-0">
            <div class="form-custom form-label form-icon mb-3">
                <label for="" class="form-label-always-active ">Judul</label>
                <input class="form-control rounded-xs" placeholder="Judul / Perihal" id="" required>
            </div>
            <div class="form-custom form-label form-icon mb-3">
                <label for="" class="form-label-always-active ">Pesan Anda</label>
                <i class="bi bi-pencil-fill font-12"></i>
                <textarea class="form-control rounded-xs" placeholder="Isi Masukan / Saran" id="c7"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto (Opsional)</label>
                <input class="form-control rounded-xs" type="file" id="formFile" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-full btn bg-blue-dark col-12">Submit</button>
            </div>
        </form>
    </div>
</div>

<div class="card card-style">
    <div class="content mt-4">
        <h3 class="text-center mb-1">Masukan / Saran Saya</h3>
        <div class="divider mx-1 my-2 mb-3"></div>
        <div class="card card-style">
            <img src="{{asset('user/images/pictures/18w.jpg')}}" class="img-fluid">
            <div class="content pb-0 text-right">
                <h3>Tambah Fitur</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque blanditiis placeat tempora enim hic dicta quos id sint voluptas molestiae.</p>
                <a href="#" class="btn btn-xxs jc-right bg-red-dark shadow-bg-m btn-full ">Hapus</a>
            </div>
        </div>
    </div>
</div>

@endsection
