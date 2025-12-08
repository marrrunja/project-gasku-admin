@extends('template.template')

@section('title', 'Akun Distributor Berhasil Dibuat - Success')

@section('body')
<style>
   
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }

    .main-container {
        padding-top: 50px;
        padding-bottom: 80px;
    }

    .header-block {
        background-color: #4CAF50;
        color: white;
        padding: 30px 0;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .success-icon-container {
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, #FF0000 0%, #D32F2F 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 40px auto;
        box-shadow: 0 10px 30px rgba(211, 47, 47, 0.4), 0 0 0 12px rgba(211, 47, 47, 0.2);
        animation: pulse 1.5s infinite alternate;
    }

    .success-icon {
        color: white;
        font-size: 80px;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .success-text {
        color: #FF0000;
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
    }

    .btn-action {
        border-radius: 20px;
        padding: 12px 30px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-detail {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }

    .btn-detail:hover {
        background-color: #388E3C;
        border-color: #388E3C;
        transform: translateY(-2px);
        /* Efek hover 3D */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .footer-block {
        background-color: #4CAF50;
        color: white;
        padding: 15px 0;
        text-align: center;
        /* Menggunakan position fixed/sticky hanya jika diperlukan, tapi lebih baik biarkan mengalir */
    }

    /* Keyframe Animasi */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.05);
        }
    }

</style>

<div class="d-flex flex-column min-vh-100">
    <div class="header-block">
        <h1 class="m-0 text-uppercase fw-bold" style="letter-spacing: 2px;">AKUN DISTRIBUTOR</h1>
    </div>

    <div class="container main-container flex-grow-1 d-flex justify-content-center">
        <div class="row w-100 justify-content-center align-items-center">
            <div class="col-sm-12 col-md-10 col-lg-8 text-center">

                <h3 class="success-text fs-4 mb-2">
                    AKUN DISTRIBUTOR GAGAL DITAMBAHKAN
                </h3>
                <h3 class="success-text fs-4 mb-4">
                    SILAHKAN COBA PERIKSA KEMBALI DATA-DATA YANG ANDA MASUKKAN 
                </h3>

                <div class="py-4">
                    <div class="success-icon-container">
                        <i class="bi bi-check-lg success-icon"></i>
                    </div>
                </div>

                <div class="row gap-2 mx-auto mt-5 justify-content-center">
                    <div class="col-12 col-sm-6 col-md-5 col-xs-4 ">
                        <a href="{{ url('/distributor/detail') }}"
                            class="btn btn-primary btn-action btn-detail fw-semibold" style="width: 200px;">
                            <i class="bi bi-arrow-clockwise me-2"></i> COBA LAGI
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-5 col-xs-4">
                        <a href="{{ url('/') }}" class="btn btn-secondary btn-action btn-detail  fw-semibold"
                            style="width: 200px;">
                            <i class="bi bi-house-door-fill me-2"></i> BERANDA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-block">
        <p class="m-0 small">©{{ date('Y') }} Copyright: GasKu | All Rights Reserved.</p>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endpush
