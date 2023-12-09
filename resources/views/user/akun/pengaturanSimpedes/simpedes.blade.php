@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')

<div class="card card-style ">
    <div class="container direction-rtl">
        <h2 class="text-center">menu</h2>
        <div class="mb-3">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-4">
                        <a href="/simpedes-pendaftaran">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/daftar.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                <p class="mb-0">Pendaftaran</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/simpedes-nasabah">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/nasabah.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                <p class="mb-0">Nasabah</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/simpedes-pengaturan">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/pengaturan.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                <p class="mb-0">Pengaturan</p>
                            </div>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="row g-3 mt-2">
                    <div class="col-12 text-center">
                      <h2>Simpan</h2>
                    </div>
                    <div class="col-6">
                      <a href="/simpedes-deposit">
                        <div class="feature-card mx-auto text-center">
                            <img src="{{ asset('user/images/deposit-simpedes.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                            <p class="mb-0">Deposit</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="/simpedes-penarikan">
                        <div class="feature-card mx-auto text-center">
                            <img src="{{ asset('user/images/deposit-simpedes.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                            <p class="mb-0">Penarikan</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                        <a href="/simpedes-historyDeposit">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/histori-simpedes.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                              <p class="mb-0">Histori Deposit</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6">
                        <a href="/simpedes-historyPenarikan">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/histori-simpedes.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
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