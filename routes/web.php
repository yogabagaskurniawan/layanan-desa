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
// !!! bagian home
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

// !!! bagian menu
Route::get('/menu', function () {
    return view('user.menu.index');
});
// bagian menu untuk marketplace
Route::get('/all-marketplace', function () {
    return view('user.menu.marketplace.allMarketplace');
});
Route::get('/marketplace/detail-produk', function () {
    return view('user.menu.marketplace.detailProduk',[
        "namaBtn" => "penjual"
    ]);
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
    return view('user.menu.umkm.umkmDetail', [
        "namaBtn" => "umkm"
    ]);
});
Route::get('/umkm-detail-produk', function () {
    return view('user.menu.umkm.umkmDetailProduk',[
        "namaBtn" => "umkm"
    ]);
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
    return view('user.menu.loker.detail-loker',[
        "namaBtn" => "Loker"
    ]);
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
    return view('user.menu.layanan.detail-layanan',[
        "namaBtn" => "layanan"
    ]);
});
// bagian menu untuk bumdes
Route::get('/bumdes', function () {
    return view('user.menu.bumdes.allbumdes');
});
Route::get('/detail-bumdes', function () {
    return view('user.menu.bumdes.detail-bumdes',[
        "namaBtn" => "Bumdes"
    ]);
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
Route::get('/masukan-user', function () {
    return view('user.menu.masukan.masukan-user');
});
// bagian menu untuk buat surat
Route::get('/buat-surat', function () {
    return view('user.menu.buatSurat.form-buat-surat');
});
// bagian menu untuk simpedes
Route::get('/simpedes', function () {
    return view('user.menu.simpedes.form-simpedes');
});
Route::get('/tambah-saldo', function () {
    return view('user.menu.simpedes.tambah-saldo');
});
Route::get('/tarik-saldo', function () {
    return view('user.menu.simpedes.tarik-saldo');
});
// bagian menu untuk bank Sampah
Route::get('/bankSampah', function () {
    return view('user.menu.bankSampah.form-bankSampah');
});
// bagian menu untuk bank Sampah
Route::get('/desa-lain', function () {
    return view('user.menu.desaLain.all-desa-lain');
});


// !!! bagian akun
Route::get('/akun', function () {
    return view('user.akun.index');
});
// toko saya
Route::get('/toko-saya', function () {
    return view('user.akun.tokoSaya.toko-saya');
});
Route::get('/toko-edit', function () {
    return view('user.akun.tokoSaya.toko-edit');
});
Route::get('/toko-produkAdd', function () {
    return view('user.akun.tokoSaya.produkAdd');
});
Route::get('/toko-produkEdit', function () {
    return view('user.akun.tokoSaya.produkEdit');
});
// pengaturan umkm
Route::get('/petugas-umkm', function () {
    return view('user.akun.pengaturanUMKM.umkm');
});
Route::get('/umkm-edit', function () {
    return view('user.akun.pengaturanUMKM.umkmEdit');
});
Route::get('/umkm/tambah-produk', function () {
    return view('user.akun.pengaturanUMKM.tambah-produk');
});
Route::get('/umkm/edit-produk', function () {
    return view('user.akun.pengaturanUMKM.edit-produk');
});
// pengaturan wisata desa
Route::get('/petugas-wisata', function () {
    return view('user.akun.pengaturanWisataDesa.wisata');
});
Route::get('/wisata/tambah-wisata', function () {
    return view('user.akun.pengaturanWisataDesa.tambah-wisata');
});
Route::get('/wisata/edit-wisata', function () {
    return view('user.akun.pengaturanWisataDesa.edit-wisata');
});
// pengaturan petugas simpedes
Route::get('/petugas-simpedes', function () {
    return view('user.akun.pengaturanSimpedes.simpedes');
});
Route::get('/simpedes-pendaftaran', function () {
    return view('user.akun.pengaturanSimpedes.pendaftaran');
});
Route::get('/simpedes-nasabah', function () {
    return view('user.akun.pengaturanSimpedes.nasabah');
});
Route::get('/simpedes-nasabah-detail', function () {
    return view('user.akun.pengaturanSimpedes.nasabahDetail');
});
Route::get('/simpedes-pengaturan', function () {
    return view('user.akun.pengaturanSimpedes.pengaturan');
});
Route::get('/simpedes-deposit', function () {
    return view('user.akun.pengaturanSimpedes.deposit');
});
Route::get('/simpedes-penarikan', function () {
    return view('user.akun.pengaturanSimpedes.penarikan');
});
Route::get('/simpedes-historyDeposit', function () {
    return view('user.akun.pengaturanSimpedes.historyDeposit');
});
Route::get('/simpedes-historyPenarikan', function () {
    return view('user.akun.pengaturanSimpedes.historyPenarikan');
});
// pengaturan petugas Bank sampah 
Route::get('/petugas-bankSampah', function () {
    return view('user.akun.pengaturanBankSampah.bankSampah');
});
Route::get('/bankSampah-pendaftaran', function () {
    return view('user.akun.pengaturanBankSampah.pendaftaran');
});
Route::get('/bankSampah-nasabah', function () {
    return view('user.akun.pengaturanBankSampah.nasabah');
});
Route::get('/bankSampah-pengaturan', function () {
    return view('user.akun.pengaturanBankSampah.pengaturan');
});
Route::get('/bankSampah-ambilSampah', function () {
    return view('user.akun.pengaturanBankSampah.ambilSampah');
});
Route::get('/bankSampah-historiPengambilan', function () {
    return view('user.akun.pengaturanBankSampah.historiPengambilan');
});
Route::get('/bankSampah-pembayaran', function () {
    return view('user.akun.pengaturanBankSampah.pembayaran');
});
Route::get('/bankSampah-historyPembayaran', function () {
    return view('user.akun.pengaturanBankSampah.historyPembayaran');
});
// pengaturan Kurir
Route::get('/petugas-kurir', function () {
    return view('user.akun.pengaturanKurir.kurir');
});

// ===== verifikasi akun
Route::get('/verivikasi-akun', function () {
    return view('user.verivikasi-akun');
});

Auth::routes(['only' => ['login', 'register']]);

// ======= Tampilan Admin ========
Route::get('/home', 'HomeController@index')->name('home');
