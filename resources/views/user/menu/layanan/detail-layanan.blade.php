@extends('layouts.user.main')

@section('content')
@include('layouts.user.partials.footer-btn')
<div class="card card-style">
    <img src="{{asset('user\images\pictures\18w.jpg')}}" class="img-fluid">
    <div class="content pb-0">
        <div class="text-center">
            <p class="mb-1">Kota : Batang</p>
            <p class="mb-1">Kecamatan : Tulis</p>
            <p class="mb-1">Desa : Tulis</p>
            <p class="mb-1">Alamat : Jl. Duren</p>
        </div>
        <div class="divider mx-1 my-2"></div>
        <h3 class="text-center mb-1">APBD Desa</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quia cumque dicta, ipsum eveniet ab magnam
            saepe minima aspernatur odit cupiditate, quam, neque in explicabo temporibus cum aut dolor mollitia.</p>
    </div>
</div>
@endsection
