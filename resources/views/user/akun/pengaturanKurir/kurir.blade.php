@extends('layouts.user.main')

@section('content')
<svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
    <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
    <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
    <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
    <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
</svg>
@include('layouts.user.partials.footer-bar')
<div class="card card-style overflow-visible" style="margin-top: 80px">
    <div class="mt-n5"></div>
    <div class="text-center">
        <label for="fileInput" class="position-relative">
            <input type="file" id="fileInput" class="visually-hidden">
            <img src="{{ asset('user/images/pictures/kurir3.jpeg') }}" alt="img" style="max-width: 100px; max-height: 100px;" class="rounded-circle shadow-l">
            <i class="bi bi-pencil-fill position-absolute bottom-0 bg-white rounded-circle p-2 shadow-sm" style="right: -4px; cursor: pointer;"></i>
        </label>
    </div>
    <div class="mt-3 d-flex justify-content-center">
        <label class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">
            Update foto
        </label>
    </div>

    <h2 class="text-center pt-3 mb-1">Wanto Wardana</h2>
    <p class="text-center font-16 mb-0">Pekalongan</p>
    <p class="text-center font-16 mb-0">085176720024</p>
    <div class="content mt-0">
        <div class="divider my-2"></div>
        <div class="row text-center">
            <div class="col-8 m-auto">
                <h2 class="mb-1 font-18">STATUS (OFFLINE)</h2>
            </div>
            <div class="my-2 d-flex justify-content-center">
                <a href="/toko-edit" class="btn btn-xxs bg-red-dark shadow-bg-m text-center mx-1">Update Online</a>
            </div>
        </div>
        <div class="divider my-2"></div>
        <div class="row text-center">
            <div class="col-8 m-auto">
                <h2 class="mb-1 font-18">STATUS (ONLINE)</h2>
            </div>
            <div class="my-2 d-flex justify-content-center">
                <a href="/toko-edit" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Update Ofline</a>
            </div>
        </div>
    </div>
</div>
<div class="card card-style">
    <div class="container mt-4 px-3 mx-auto" style="max-width: 576px">
        <h3 class="text-center mb-1">Form Daftar Kurir</h3>
        <div class="content">
            <form class="demo-animation needs-validation m-0" novalidate="">
                <div class="form-custom mb-3 form-border form-icon form-label">
                    <i class="bi bi-telephone-fill font-12"></i>
                    <input type="tel" class="form-control rounded-xs" id="c3" placeholder="nomor telephone / whatshapp" pattern="[+ 0-9]{10,15}" required="">
                    <label for="c3" class="color-theme">Nomor Telephone / Whatshapp</label>
                    <div class="valid-feedback">Phone Number looks good!<!-- text for field valid--></div>
                    <div class="invalid-feedback">Phone Number is missing or is invalid.</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom mb-3 form-border form-icon form-label">
                    <i class="bi bi-file-earmark-plus font-14"></i>
                    <textarea class="form-control rounded-xs" placeholder="alamat" id="c7"></textarea>
                    <label for="c7" class="color-theme">Alamat</label>
                    <div class="valid-feedback">HTML5 does not offer Dates Field Validation!<!-- text for field valid--></div>
                </div>
                <div class="file-data">
                    <div class="row text-center images-container"></div>
                    <div class="text-center">
                        <input type="file" class="upload-file" accept="image/*">
                        <p class="btn btn-xxs text-uppercase rounded-s upload-file-text mb-0 border-blue-dark color-blue-dark">Upload foto profil toko</p>
                        <p style="font-size:12px">Maksimal ukuran foto 3MB</p>
                    </div>
                </div>   
                <button class="btn btn-full bg-mint-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4" type="submit">Daftar</button>
            </form>
        </div>
    </div>
</div>
@endsection