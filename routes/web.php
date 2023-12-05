<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ======= Tampilan User ========
// bagian home
Route::get('/', function () {
    return view('user.welcome');
});

// bagian informasi
Route::get('/informasi', function () {
    return view('user.informasi.index');
});
Route::get('/detail-informasi', function () {
    return view('user.informasi.detail');
});

// bagian menu
Route::get('/menu', function () {
    return view('user.menu.index');
});
// bagian menu untuk marketplace
Route::get('/all-marketplace', function () {
    return view('user.menu.marketplace.allMarketplace');
});
Route::get('/marketplace/detail-produk', function () {
    return view('user.menu.marketplace.detailProduk');
});
Route::get('/marketplace/detail-produk/hubungi-kurir', function () {
    return view('user.menu.marketplace.hubungi-kurir');
});
Route::get('/marketplace/detail-produk/kunjungi-toko', function () {
    return view('user.menu.marketplace.kunjungi-toko');
});
// bagian menu untuk kurir
Route::get('/kurir', function () {
    return view('user.menu.kurir.allKurir');
});
// bagian menu untuk umkm
Route::get('/umkm', function () {
    return view('user.menu.umkm.allUmkm');
});
Route::get('/umkm-detail', function () {
    return view('user.menu.umkm.umkmDetail');
});
Route::get('/umkm-detail-produk', function () {
    return view('user.menu.umkm.umkmDetailProduk');
});
// bagian menu untuk loker
Route::get('/loker', function () {
    return view('user.menu.loker.allLoker');
});
Route::get('/buat-loker', function () {
    return view('user.menu.loker.buat-loker');
});
Route::get('/loker-saya', function () {
    return view('user.menu.loker.loker-saya');
});
Route::get('/detail-loker', function () {
    return view('user.menu.loker.detail-loker');
});
// bagian menu untuk wisata
Route::get('/wisata', function () {
    return view('user.menu.wisata.allWisata');
});
Route::get('/detail-wisata', function () {
    return view('user.menu.wisata.detail-Wisata',[
        "namaBtn" => "Wisata"
    ]);
});
// bagian menu untuk layanan
Route::get('/layanan', function () {
    return view('user.menu.layanan.allLayanan');
});
Route::get('/detail-layanan', function () {
    return view('user.menu.layanan.detail-layanan');
});
// bagian menu untuk bumdes
Route::get('/bumdes', function () {
    return view('user.menu.bumdes.allbumdes');
});
Route::get('/detail-bumdes', function () {
    return view('user.menu.bumdes.detail-bumdes');
});
// bagian menu untuk jasa
Route::get('/jasa', function () {
    return view('user.menu.jasa.alljasa');
});
Route::get('/detail-jasa', function () {
    return view('user.menu.jasa.detail-jasa',[
        "namaBtn" => "Jasa"
    ]);
});
Route::get('/tambah-jasa', function () {
    return view('user.menu.jasa.tambah-jasa');
});
Route::get('/jasa-saya', function () {
    return view('user.menu.jasa.jasa-saya');
});
// bagian menu untuk masukan
Route::get('/masukan', function () {
    return view('user.menu.masukan.form-masukan');
});
// bagian menu untuk buat surat
Route::get('/buat-surat', function () {
    return view('user.menu.buatSurat.form-buat-surat');
});
// bagian menu untuk simpedes
Route::get('/simpedes', function () {
    return view('user.menu.simpedes.form-simpedes');
});
// bagian menu untuk bank Sampah
Route::get('/bankSampah', function () {
    return view('user.menu.bankSampah.form-bankSampah');
});
// bagian menu untuk bank Sampah
Route::get('/desa-lain', function () {
    return view('user.menu.desaLain.all-desa-lain');
});

// bagian akun
Route::get('/akun', function () {
    return view('user.akun.index');
});
Route::get('/toko-saya', function () {
    return view('user.akun.toko-saya');
});
Route::get('/toko-edit', function () {
    return view('user.akun.toko-edit');
});
Route::get('/toko-add', function () {
    return view('user.akun.toko-add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
