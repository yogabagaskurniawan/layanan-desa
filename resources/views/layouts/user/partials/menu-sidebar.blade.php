<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div class="menu-size" style="width:230px;">
    <!-- Menu Title-->
    <div class="pt-3">
        <div class="page-title sidebar-title d-flex">
            <div class="align-self-center me-auto">
                <p class="color-highlight">Welcome Back</p>
                <h1>Bagas</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#"
                class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                    <img src="{{ asset('user/images/pictures/logo.png') }}" width="45" class="rounded-m" alt="img">
                </a>
            </div>
        </div>

        <div class="divider divider-margins mb-3 opacity-50"></div>

        <!-- Main Menu List-->
        <div class="list-group list-custom list-menu-large">
            {{-- <a href="index-waves.html" id="nav-welcome" class="list-group-item">
                <img src="{{ asset('user/images/assetMenu/menuadmin.png') }}" width="24px" alt="">
                <div>Menu Admin</div>
            </a> --}}
            <a href="" id="nav-welcome" class="list-group-item">
                <i class="bi bg-red-dark shadow-bg shadow-bg-xs bi-house-door-fill"></i>
                <div>Menu Admin</div>
                <span class="badge bg-danger rounded-pill ms-2">99</span>
            </a>
            <a href="/akun" id="nav-pages" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/akun.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-green-dark shadow-bg shadow-bg-xs bi-person-fill"></i>
                <div>Akun</div>
            </a>
            <a href="/toko-saya" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/toko-saya.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-blue-dark shadow-bg shadow-bg-xs bi-shop-window"></i>
                <div>Toko Saya</div>
            </a>
            <a href="/petugas-kurir" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/pengaturan-kurir.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-brown-dark shadow-bg shadow-bg-xs bi-file-earmark-person"></i>
                <div>Pengaturan Kurir</div>
            </a>
            <a href="/petugas-umkm" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/pengaturan-umkm.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-magenta-dark shadow-bg shadow-bg-xs bi-shop"></i>
                <div>Pengaturan Umkm</div>
            </a>
            <a href="/petugas-wisata" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/pengaturan-wisata.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-yellow-dark shadow-bg shadow-bg-xs bi-image-alt"></i>
                <div>Pengaturan Wisata Desa</div>
            </a>
            <a href="/petugas-simpedes" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/petugas-simpedes.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-orange-dark shadow-bg shadow-bg-xs bi-save2-fill"></i>
                <div>Petugas Simpedas</div>
            </a>
            <a href="/petugas-bankSampah" id="nav-homes" data-submenu="sub1" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/akun.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-mint-dark shadow-bg shadow-bg-xs bi-recycle"></i>
                <div>Petugas Bank Sampah</div>
            </a>
        </div>


        <div class="divider divider-margins mb-3 opacity-50"></div>

        <div class="list-group list-custom list-menu-large">
            <a href="/login" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/akun.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-blue-dark shadow-bg shadow-bg-xs bi-person-check-fill"></i>
                <div>Masuk</div>
            </a>
            <a href="/register" class="list-group-item">
                {{-- <img src="{{ asset('user/images/assetMenu/akun.png') }}" width="24px" alt=""> --}}
                <i class="bi bg-magenta-dark shadow-bg shadow-bg-xs bi-person-plus-fill"></i>
                <div>Daftar</div>
            </a>
        </div>
        <!-- Useful Links-->
        <div class="list-group list-custom list-menu-small">
            <a href="/logout" class="list-group-item">
                <i class="bi bi-box-arrow-right font-16"></i>
                <div>Log Out</div>
            </a>
            <a href="/verivikasi-akun" class="list-group-item">
                <i class="bi bi-box-arrow-right font-16"></i>
                <div>verivikasi-akun</div>
            </a>
        </div>

        <div class="divider divider-margins opacity-50"></div>
        <!-- Menu Copyright -->
        <p class="px-3 font-9 opacity-30 color-theme mt-n3">Copyright <span class="copyright-year"></span>. Made with <i class="bi bi-heart-fill color-red-dark px-1"></i> by Desaku</p>
    </div>
</div>
