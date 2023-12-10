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
                        <a href="/bankSampah-pendaftaran">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/daftar.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                <p class="mb-0">Pendaftaran</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/bankSampah-nasabah">
                            <div class="feature-card mx-auto text-center">
                                <img src="{{ asset('user/images/nasabah.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                                <p class="mb-0">Nasabah</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="/bankSampah-pengaturan">
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
                      <h2>Fitur</h2>
                    </div>
                    <div class="col-6">
                      <a href="/bankSampah-ambilSampah">
                        <div class="feature-card mx-auto text-center">
                            <img src="{{ asset('user/images/bank-sampah.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                            <p class="mb-0">Ambil Sampah</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="/bankSampah-historiPengambilan">
                        <div class="feature-card mx-auto text-center">
                            <img src="{{ asset('user/images/histori-simpedes.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                            <p class="mb-0">Histori Pengambilan</p>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                        <a href="/bankSampah-pembayaran">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/payment.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                              <p class="mb-0">Pembayaran</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6">
                        <a href="/bankSampah-historyPembayaran">
                          <div class="feature-card mx-auto text-center">
                              <img src="{{ asset('user/images/informasi.png')}}" alt="" style="width: 50px; height: 50px; object-fit: cover;">
                              <p class="mb-0">Histori Pembayaran</p>
                          </div>
                        </a>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection