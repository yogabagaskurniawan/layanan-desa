@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-bar')
<div class="header-bar header-center shadow-m">
    <h2 class="m-auto">Jasa Saya</h2>
</div>
<div class="divider mx-4"></div>
<div class="card card-style">
    <div class="content mb-0">
        <div class="my-2 d-flex justify-content-center">
            <a href="/tambah-jasa" class="btn btn-xxs bg-mint-dark shadow-bg-m text-center mx-1">Tambah jasa</a>
            <a href="/jasa-saya" class="btn btn-xxs bg-blue-dark shadow-bg-m text-center mx-1">Jasa Saya</a>
        </div>        
        <div class="pb-2"></div>
    </div>
</div>
@endsection