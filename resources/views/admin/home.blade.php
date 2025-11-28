@extends('layout.layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/home.css') }}">
@endpush

@section('title', 'Home admin')

@section('body')
    <section class=" pb-5 pt-5" style="max-height: 100vh; overflow-y: auto;">
        <div class="container">
            <div class="row justify-content-center gy-2">
                <div class="col-12 col-md-6 col-lg-4 mb-2 me-lg-1 mb-md-3 mb-lg-0">
                    <div class="card pilihan ">
                        <div class="card-body text-center">
                            <i class="bi bi-person-gear fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="{{route('admin.manage_account')}}" class="link">Manage Account</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-3 mb-lg-2">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-activity fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="cust_activity.php" class="link">Aktivitas Pembeli</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-3 mb-lg-2">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-megaphone fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="/admin/input-stok" class="link">
                                    Input Stok Gas
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-cart fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="pesanan.php" class="link">Pesanan</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection