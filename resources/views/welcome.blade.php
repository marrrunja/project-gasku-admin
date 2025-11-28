@extends('layout.layout_homepage')
@section('title', 'Beranda')
@section('content')
    <section>
        <div class=" d-flex justify-content-between align-items-center bg-success px-5 py-3">
            <!-- Logo Tengah -->
            <div class="text-white fw-bold fs-3 d-flex align-items-center" style="cursor: default">
                <img src="{{ asset('images/gasPutih.png') }}" width="50" height="50">
                <div class="">G<i class="bi bi-fire"></i>SKU</div>
            </div>
            <!-- Login/Register Card di kanan -->
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu border-white bg-success px-1 py-1" style="width:100%">
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-success text-white text-decoration-none py-1"
                            style="width: 100%;">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <div class="border-top my-1"></div>
                    <li>
                        <a href="{{ route('register') }}" class="btn btn-success text-white text-decoration-none py-1"
                            style="width: 100%;">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </section>
    <section class="content">
        <div class="content-wrapper">
            <div class="container" style="cursor: default">
                <h2 class="text-center text-success mb-4 mt-4 ">
                    Selamat Datang di Aplikasi Pemesanan Gas Online
                </h2>
                <div class="text-center mx-auto mb-4 p-3"
                    style="width: 350px; background: #f1f1f1; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <h3 class="text-success">Pengumuman</h3>
                    <h6>Tersedia Tabung Gas di Pangkalan: {{ $stok }}</h6>
                    <h6>terakhir di update: {{ $tanggal_pengumuman }}
                    </h6>
                </div>
                <div class="gas-image text-center pt-2">
                    <img src="{{ asset('images/Gas_Mereng.png') }}" alt="" style="width: 300px;">
                </div>

                <div class="text-center text-success">
                    <h3>
                        PANGKALAN GAS LPG 3 KG M. SUPARNO
                    </h3>
                    <h6>RT. 05 PARIT LAPIS KEL. MEKAR JAYA KEC. BETARA KAB. TANJAB BARAT</h6>
                    <p class="pt-3">- Kritik dan saran silahkan sampaikan melalui menu “Hubungi kami” yang terletak di
                        pojok
                        kiri bawah -
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="bg-success text-white d-flex justify-content-center align-items-center py 5">
        <div class="container d-flex justify-content-between pt-3 mb-2">
            <div class="row">
                <div class="col-12">
                    <h4 class="footer-title text-center" style="cursor: default">Hubungi Kami</h4>
                    <div class="d-flex justify-content-center gap-4 mb-2">
                        <span>
                            <a href="">
                                <img src="{{ asset('images/instagram.png') }}" alt="" width="30">
                            </a>
                        </span>
                        <span>
                            <a href="">
                                <img src="{{ asset('images/Facebook-Logo-HD-PNG.png') }}" alt="" width="30">
                            </a>
                        </span>
                        <span>
                            <a href="">
                                <img src="{{ asset('images/wa.png') }}" alt="" width="30">
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="footer-title text-center" style="cursor: default">Tentang Kami</h4>
                    <div class="text-footer text-center"><a href="" class="text-white">kunjungi website
                            www.gasku.com</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush