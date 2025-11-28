@extends('template.template') 

@section('title', 'Detail Akun Distributor')

@section('body')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }
    .header-block {
        background-color: #4CAF50; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .detail-card {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .detail-label {
        font-weight: 500;
        color: #6c757d; 
        white-space: nowrap; 
        width: 120px; 
    }
    .detail-value {
        font-weight: 600;
        color: #343a40;
        word-break: break-word; 
    }
    .btn-home {
        background-color: #70AD47; 
        color: white;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 600;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-home:hover {
        background-color: #5d9238;
        color: white;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }
    .footer-block {
        background-color: #4CAF50;
        color: white;
        padding: 15px 0;
        text-align: center;
    }
</style>

<div class="d-flex flex-column min-vh-100">
    <div class="header-block text-white text-center py-4">
        <h2 class="m-0 text-uppercase fw-bold">AKUN DISTRIBUTOR</h2>
    </div>

    <div class="container flex-grow-1 d-flex justify-content-center py-5">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="text-center mb-4">
                    <p class="fs-5 fw-medium mb-0 pb-0">
                        AKUN DISTRIBUTOR BERHASIL DITAMBAHKAN
                        
                    </p>
                    <p class="fs-5 fw-medium">BERIKUT DETAIL NYA</p>
                </div>

                <div class="detail-card p-4">
                    <h3 class="detail-title text-center bg-light">Detail Akun</h3>
                    <hr>
                    
                    <div class="container-fluid px-0">
                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1">Nama Lengkap</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">EKA P.N.S</div>
                        </div>

                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1">Username</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">ekaputra</div>
                        </div>

                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1">Nomor KK</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">0000000000000000</div>
                        </div>

                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1">Email</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">warga+62@gmail.com</div>
                        </div>

                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1">Nomor HP</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">0888 8888 8888</div>
                        </div>

                        <div class="row detail-item mb-3">
                            <div class="col-4 detail-label me-1 ">Alamat</div>
                            <div class="col-auto text-end">:</div>
                            <div class="col detail-value">YNTKTS</div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="{{ url('/') }}" class="btn btn-home">
                        <i class="bi bi-house-door-fill me-2"></i> KEMBALI KE BERANDA
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-block mt-auto">
        <p class="m-0 small">©2025 Copyright: GasKu</p>
    </div>
</div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endpush