@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" style="margin-top: -160px">
    <path id="header-deco-1" d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z"></path>
    <path id="header-deco-2" d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z"></path>
    <path id="header-deco-3" d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z"></path>
    <path id="header-deco-4" d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z"></path>
</svg>
<div class="notch-clear"></div>
<div class="pt-4 mt-4"></div>
<div class="pt-3"></div>
<div class="card card-style mx-0">
    <h2 class="m-auto mt-3">Pengaturan Simpedes</h2>
    <div class="container direction-rtl">
        <h2 class="text-center font-500 mt-2 font-20">menu</h2>
        <div class="mb-3">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-4">
                        <a href="/simpedes-pendaftaran">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/daftar.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                                <p class="mb-0">Pendaftaran</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/simpedes-nasabah">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/nasabah.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                                <p class="mb-0">Nasabah</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/simpedes-pengaturan">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/pengaturan.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                                <p class="mb-0">Pengaturan</p>
                            </div>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="row g-3 mt-2">
                    <h2 class="text-center font-500 mt-2 font-20">Simpan</h2>
                    <div class="col-6 position-relative">
                        <a href="/simpedes-deposit">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/deposit-simpedes.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                                <span class="position-absolute top-0 start-60 translate-middle badge rounded-pill bg-danger">1</span>
                                <p class="mb-0">Deposit</p>
                            </div>
                        </a>
                    </div>                    
                    <div class="col-6">
                      <a href="/simpedes-penarikan">
                        <div class="feature-card mx-auto text-center">
                            <img src="{{ asset('user/images/deposit-simpedes.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                            <p class="mb-0">Penarikan</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                        <a href="/simpedes-historyDeposit">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/histori-simpedes.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                              <p class="mb-0">Histori Deposit</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6">
                        <a href="/simpedes-historyPenarikan">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/histori-simpedes.png')}}" alt="" style="width: 32px; height: 32px; object-fit: cover;">
                              <p class="mb-0">Histori Penarikan</p>
                          </div>
                        </a>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection