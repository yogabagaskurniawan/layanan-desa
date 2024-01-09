@extends('layouts.user.main')

@section('header')
{{-- modal --}}
<div id="menu-top-full"  style="height: 100%; display: block;max-width: 1000px;" class="offcanvas offcanvas-top m-auto" aria-modal="true" role="dialog">
    <div class="d-flex m-3">
        <div class="align-self-center">
            <h2 class="font-700 mb-0">Detail Produk</h2>
        </div>
        <div class="align-self-center ms-auto">
            <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
            </a>
        </div>
    </div>
    <div class="content mt-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('user/images/pictures/marketplace-1.jpg') }}" class="img-fluid d-block m-auto rounded" style="width: 320px; height: 320px;">
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('user/images/pictures/merkLaptop.jpeg') }}" class="img-fluid d-block m-auto rounded" style="width: 320px; height: 320px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.8));">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="text-center mt-2">
            <h2 class="font-200 mb-2">Sambal Pedas</h2>
            <p class="mb-0 font-14">            
                <span class="badge bg-primary mb-2 bg-orange-dark px-2 rounded-s font-14">Makanan</span> <br>
                <span class="text-primary font-16"> Rp 250.000</span>
            </p>
        </div>
        <div class="divider my-2"></div>
        <div class="align-self-center">
            <h3 class="font-200">Deskripsi Produk</h3>
        </div>
        <p class="mb-4">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more r
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more r
        </p>
    </div>
</div>
@endsection

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="pt-3 sticky-nav">
    <div class="page-title pb-3 d-flex align-items-center mx-0" style="max-width: 1000px !important;">
        <div class="align-self-center ms-auto">
            <a href="/toko-edit" class=" ms-0 icon icon-xs bg-theme rounded-s shadow-m">
                <i class="bi bi-gear color-theme font-20"></i>
            </a>
        </div>
    </div>
</div>
<svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" style="margin-top: -100px">
    <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
    <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
    <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
    <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
</svg>
<div class="notch-clear"></div>
<div class="pt-4 mt-5"></div>
<div class="pt-3"></div>
<div class="card card-style overflow-visible mt-5 mb-2 mx-0 rounded-0" style="border-bottom-right-radius: 22px !important;border-bottom-left-radius: 22px !important">
    <div class="mt-n5"></div>
    <img src="{{ asset('user/images/pictures/iklan2.jpeg') }}"  class="img-fluid mx-auto rounded-circle border border-m border-theme" width="100" style="height: 100px">
    <div class="content mt-0 mb-3">
        <h2 class="pt-3 mb-0">Toko Sembako Berkah </h2>
        <p class="mb-0 font-500 font-14">Tulis, Batang</p>
        <div class="divider mx-1 my-1"></div>
        <p class="mb-0 font-500 font-14">
            Menjual Kebutuhan Pokok
        </p>
        <p class="mb-0 font-500 font-14">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
            ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni
            ullam beatae corrupti molestias commodi facilis reiciendis eaque assumenda eos!
        </p>
        <div class="mt-3 d-flex justify-content-center">
            <a href="/toko-produkAdd" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Tambah Produk</a>
        </div>
    </div>
</div>
<div class=" border-0 mx-0 " style="max-width: 1000px !important;">
    <div class="content mb-3">
        <div class="row justify-content-between  pe-0">
            <div class="col">
                <div class="form-custom form-label no-icon mb-0">
                    <input type="text" class="border border-secondary form-control rounded-pill fs-6 bg-theme" id="c1" placeholder="Cari produk...">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon2"><i class="bi bi-search font-20"></i></span>
                    <label for="c1" class="color-theme">Search</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content px-2 mt-0">
    <h3 class="font-200 mb-3 ms-n2">Produk Saya</h3>
    <div class="row mb-0">
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Elektronik</span>
                <img src="{{ asset('user/images/pictures/marketplace-1.jpg') }}" class="card-img-top img-fluid rounded" style="height: 113px !important;
                    alt=" card="" image"="">
                <div class="content pb-0 mx-2">
                    <p class="font-14 font-900 mb-0 text-truncate" style="max-width: 150px;">Sambal Balado</p>
                    <h5 class="text-truncate">Rp 9.000</h5>
                    <div class="text-center">
                        <a href="/toko-produkEdit" class="badge bg-warning badge-sm rounded-pill">Edit</a>
                        <a href="" class="badge bg-danger badge-sm rounded-pill">Hapus</a>
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-top-full"  class="badge bg-success badge-sm rounded-pill">Preview</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 col-sm-3 col-md-2 px-0">
            <div class="card card-style mx-1 mb-2" style="border-radius: 12px !important">
                <span class="badge bg-primary position-absolute top-0 end-0 m-2 bg-orange-dark px-2 rounded-s font-12">Elektronik</span>
                <img src="http://127.0.0.1:8000/user/images/pictures/marketplace-1.jpg" class="card-img-top img-fluid rounded" style="height: 113px !important;
                    alt=" card="" image"="">
                <div class="content pb-0 mx-2">
                    <p class="font-14 font-900 mb-0 text-truncate" style="max-width: 150px;">Sambal Balado</p>
                    <h5 class="text-truncate">Rp 9.000</h5>
                    <div class="text-center">
                        <a href="/toko-produkEdit" class="badge bg-warning badge-sm rounded-pill">Edit</a>
                        <a href="" class="badge bg-danger badge-sm rounded-pill">Hapus</a>
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-top-full"  class="badge bg-success badge-sm rounded-pill">Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection