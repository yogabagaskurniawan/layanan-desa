@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')

<div class="card card-style">
    <div class="content">
        <div class="text-center">
            <h1 class="">Progammer</h1>
            
            <p class="mb-0 font-14"><span>Selasa, 7 Juni 2022</span></p>
        </div>
        <div class="divider my-3"></div>
        <p class="text-center">
            <strong>Jobdes yang Harus Diketahui oleh ART (<strong>Progammer</strong>)</strong>
        </p>
        {{-- <p class="text-center">
            Harus bisa minimal 7 bahasa pemograman
            <br>punya attitude yang baik
            <br>sopan terhadap rekan kerja
        </p> --}}
        <div style="text-align: center;">
            <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 10px;"><strong>1.</strong>harus bisa minimal 7 bahasa pemrograman</li>
                <li style="margin-bottom: 10px;"><strong>2.</strong>Harus bisa minimal 7 bahasa pemrograman</li>
                <li style="margin-bottom: 10px;"><strong>3.</strong>Harus bisa minimal 7 bahasa pemrograman</li>
            </ul>
        </div>
        

        <div class="divider my-3"></div>
        <h4>Bagikan Lowongan Kerja ini</h4>
        <div class="d-flex">
            <div class="align-self-center me-2">
                <a href="">
                    <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-facebook font-20 color-white"></i></span>
                </a>
            </div>
            <div class="align-self-center me-2">
                <a href="">
                    <span class="icon icon-m rounded-s gradient-teal shadow-bg shadow-bg-xs"><i class="bi bi-twitter font-20 color-white"></i></span>
                </a>
            </div>
            <div class="align-self-center me-2">
                <a href="">
                    <span class="icon icon-m rounded-s gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-telegram font-20 color-white"></i></span>
                </a>
            </div>
            <div class="align-self-center me-2">
                <a href="">
                    <span class="icon icon-m rounded-s gradient-mint shadow-bg shadow-bg-xs"><i class="bi bi-whatsapp font-20 color-white"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card card-style">
    <div class="content">
        <ul class="mb-0 ps-3">
            <li>Dibuat oleh : Admin</li>
            <li>Kota : Batang</li>
            <li>Desa : Satu</li>
        </ul>
    </div>
</div>

@endsection