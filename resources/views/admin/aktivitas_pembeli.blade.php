@extends('layout.layout')

@section('title', 'Aktivitas Pembeli')

@section('body')
<section class="py-5 bg-light" style="min-height:77vh;">
    <div class="container px-lg-5">

        {{-- HEADER & TITLE SECTION --}}
        <div class="text-center mb-5">
            <h2 class="fw-bolder text-dark mb-1 border-bottom border-success border-3 pb-1 d-inline-block">
                RIWAYAT TRANSAKSI
            </h2>
            <p class="text-muted fs-6 mt-2">Akses Cepat Data Pembelian Pelanggan.</p>
        </div>

        {{-- FILTER AND SEARCH BAR (Advanced Filter) --}}
        <div class="row mb-4 g-3 align-items-end">

            {{-- Filter Status --}}
            <!-- <div class="col-md-3 col-lg-2">
                <label for="statusFilter" class="form-label text-sm fw-semibold text-muted mb-1">Status</label>
                <select id="statusFilter" class="form-select form-select-sm rounded-3 shadow-sm border-0">
                    <option selected>Semua Status</option>
                    <option>Lunas</option>
                    <option>Menunggu</option>
                    <option>Batal</option>
                </select>
            </div> -->

            <!-- {{-- Urutkan / Sort Dropdown --}}
            <div class="col-md-3 col-lg-2">
                <label for="sortDropdown" class="form-label text-sm fw-semibold text-muted mb-1">Urutkan</label>
                <select id="sortDropdown" class="form-select form-select-sm rounded-3 shadow-sm border-0">
                    <option selected>Terbaru</option>
                    <option>Terlama</option>
                </select>
            </div> -->
            
            {{-- Search Input --}}
            <!-- <div class="col-md-6 col-lg-8">
                <form method="get" action="">
                    <label for="searchInput" class="form-label text-sm fw-semibold text-muted mb-1 d-none d-sm-block">Cari Pembeli (Nama/NIK)</label>
                    <div class="input-group">
                        <input type="text" name="pencarian" id="searchInput"
                            class="form-control form-control-sm rounded-3 pe-5 shadow-sm border-0"
                            placeholder="Cari berdasarkan nama atau NIK..." aria-label="Search">
                        
                        <button type="submit" name="tombolCari"
                            class="btn btn-dark btn-sm position-absolute end-0 top-0 h-100 px-3 rounded-end-3"
                            style="z-index: 1;">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div> -->
        </div>

        <hr class="mb-4 text-light">

        {{-- TRANSAKSI LIST / CARD --}}
        <div class="row g-4">
            
            {{-- CATATAN: Variabel $dataTransaksis harus dikirim dari Laravel Controller --}}
            @if(isset($dataTransaksis) && count($dataTransaksis) > 0)
            @foreach($dataTransaksis as $transaksi)
            <div class="col-12 col-md-6 col-lg-4">
                
                {{-- Penentuan Gaya berdasarkan Status --}}
                @php
                    $status = strtolower($transaksi->status);
                    $borderColor = '';
                    $iconClass = 'bi-check-circle-fill text-success';
                    $bgClass = 'bg-success';
                    $textColor = ''; // Default text color
                    
                    if ($status == 1) {
                        $borderColor = 'border-success';
                        $iconClass = 'bi-check-circle-fill text-success';
                        $bgClass = 'bg-success';
                    } elseif ($status == 0) {
                        $borderColor = 'border-warning';
                        $iconClass = 'bi-clock-fill text-warning';
                        $bgClass = 'bg-warning text-dark';
                        $textColor = 'text-dark';
                    }
                @endphp
                
                <div class="card shadow-lg border-start border-3 {{ $borderColor }} transition-300 h-100">
                    {{-- Ganti '#' dengan route detail transaksi aktual --}}
                    <a href="{{ route('admin.detail_transaksi', $transaksi->id) }}" class="text-decoration-none stretched-link">
                        <div class="card-body p-4 d-flex flex-column">

                            {{-- Tanggal & Total Harga --}}
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="text-start">
                                    <p class="mb-0 text-muted text-xs fw-semibold">TGL. TRANSAKSI</p>
                                    <h5 class="fw-bold text-dark mb-0">{{ \Carbon\Carbon::parse($transaksi->created_at)->isoFormat('D MMMM YYYY') }}</h5>
                                </div>
                                <div class="text-end">
                                    <p class="mb-0 text-muted text-xs fw-semibold">TOTAL</p>
                                    {{-- Mengasumsikan $transaksi->total sudah diformat mata uang --}}
                                    <h4 class="fw-bolder text-dark mb-0 text-success">{{ $transaksi->jumlah_pembelian * 25000 }}</h4>
                                </div>
                            </div>
                            
                            <hr class="my-2 border-dashed">

                            {{-- Nama Pembeli & NIK --}}
                            <div class="flex-grow-1 mb-3">
                                <p class="mb-1 text-muted text-xs">PEMBELI | NIK</p>
                                <h6 class="fw-bold text-dark mb-0 truncate">{{ $transaksi->nama_lengkap }}</h6>
                                <p class="text-muted text-sm mb-0">{{ $transaksi->no_kk }}</p>
                            </div>
                            
                            {{-- Status Transaksi Badge --}}
                            <div class="mt-auto pt-2 border-top">
                                <span class="badge rounded-pill {{ $bgClass }} me-2 {{ $textColor }}">
                                    <i class="bi {{ $iconClass }} me-1"></i> {{ $transaksi->status === 1 ? 'Sudah dibayar':'Belum bayar' }}
                                </span>
                                <span class="text-sm fw-semibold text-success float-end">
                                    Lihat Detail <i class="bi bi-arrow-right-short"></i>
                                </span>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 mt-5">
                <div class="alert alert-info text-center shadow-sm" role="alert">
                    <i class="bi bi-exclamation-circle me-2"></i> Belum ada riwayat transaksi yang ditemukan.
                </div>
            </div>
            @endif

        </div>
    </div>
</section>

<style>
    /* Custom Utilities */
    .text-sm { font-size: 0.875rem !important; }
    .text-xs { font-size: 0.7rem !important; }
    .bg-light { background-color: #f7f9fc !important; }
    .border-dashed { border-style: dashed !important; border-color: #e2e8f0 !important; }
    
    /* Modern Card Styles */
    .card {
        border-radius: 0.75rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .card a.stretched-link {
        color: inherit;
    }
    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }
    .card.border-start {
        border-left: 5px solid;
    }
    /* Mengubah warna tombol cari default menjadi dark */
    .input-group button.btn-dark {
         border-top-left-radius: 0 !important;
         border-bottom-left-radius: 0 !important;
    }
</style>
@endsection