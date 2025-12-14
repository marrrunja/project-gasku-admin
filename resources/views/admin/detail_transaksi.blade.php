@extends('layout.layout')

@section('title', 'Detail Transaksi')

@push('styles')
<style>
    /* Variabel Warna */
    :root {
        --primary-color: #008080; /* Teal/Hijau Tosca Modern */
        --success-color: #198754;
        --warning-color: #ffc107;
        --danger-color: #dc3545;
        --secondary-color: #f0f0f0;
        --text-dark: #333;
        --text-muted: #888;
        --bg-light: #f7f7f7;
    }

    body {
        background-color: var(--bg-light);
    }

    .transaction-card {
        width: 100%;
        max-width: 420px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 30px;
        transition: transform 0.3s ease;
    }

    .transaction-card:hover {
        transform: translateY(-3px);
    }

    /* Header Styling */
    .card-header-tx {
        text-align: center;
        margin-bottom: 20px;
    }

    .icon-wrapper {
        color: white;
        background-color: var(--primary-color);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin: 0 auto 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .card-header-tx h3 {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 5px;
        font-size: 1.5rem;
    }

    .separator {
        border: none;
        height: 1px;
        background-color: var(--secondary-color);
        margin: 20px 0;
    }

    /* Detail Row Styling */
    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
    }

    .detail-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .detail-value {
        color: var(--text-dark);
        font-weight: 600;
        font-size: 0.95rem;
        text-align: right;
    }
    
    /* Item List Styling */
    .item-list-header {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px solid var(--secondary-color);
    }

    .item-detail {
        display: flex;
        justify-content: space-between;
        font-size: 0.9rem;
        padding: 5px 0;
    }

    /* Total Section Styling */
    .total-section {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 2px dashed var(--primary-color);
    }

    .total-row {
        display: flex;
        justify-content: space-between;
        font-size: 1.2rem;
        font-weight: 700;
    }

    .total-label {
        color: var(--text-dark);
    }

    .total-value {
        color: var(--primary-color);
    }

    .action-button-group {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
</style>
@endpush

@section('body')

    {{-- Data status transaksi di-hardcode ke 'menunggu' untuk menampilkan tombol Konfirmasi --}}
    @php
        $status_lower = $dataTransaksi->status; // Ganti ke 'lunas' atau 'batal' untuk testing tampilan
    @endphp

    <section class="d-flex align-items-center py-4" style="min-height:79vh;">
        <div class="container d-flex justify-content-center mt-2 mb-5">
            <div class="transaction-card">

                <div class="card-header-tx">
                    <div class="icon-wrapper">
                        <i class="bi bi-receipt"></i>
                    </div>
                    <h3>Detail Transaksi</h3>
                    {{-- ID Transaksi diisi eksplisit --}}
                    <p style="font-size: 0.85rem; color: var(--text-muted);">ID Transaksi: T{{$dataTransaksi->id}}</p>
                </div>

                <hr class="separator">

                {{-- INFORMASI DASAR --}}
                <div class="item-list-header">INFORMASI DASAR</div>
                <div class="detail-row">
                    <span class="detail-label">Pembeli</span>
                    {{-- Nama Pembeli diisi eksplisit --}}
                    <span class="detail-value">{{$dataTransaksi->username}}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Tanggal Transaksi</span>
                    {{-- Tanggal diisi eksplisit --}}
                    <span class="detail-value">
                        {{ \Carbon\Carbon::parse($dataTransaksi->created_at)->isoFormat('D MMMM YYYY') }}
                    </span>
                </div>
                
                <hr class="separator">

                {{-- RINCIAN PEMBELIAN --}}
                <div class="item-list-header">RINCIAN PEMBELIAN</div>
                
                {{-- Item produk diisi eksplisit --}}
                <div class="item-detail">
                    <span>{{ $dataTransaksi->jumlah_pembelian }}x GAS LPG 3KG</span>
                    <span>RP. {{$harga}}</span>
                </div>
                {{-- Tambahkan item lain jika perlu (misal: 2x Beras Premium) --}}
                <div class="total-section">
                    <div class="total-row">
                        <span class="total-label">TOTAL BIAYA</span> 
                        {{-- TOTAL BIAYA diisi eksplisit sesuai permintaan --}}
                        <span class="total-value">RP. {{$dataTransaksi->jumlah_pembelian * $harga}}</span>
                    </div>
                </div>
                
                <hr class="separator">
                
                {{-- STATUS & ACTION BUTTONS (Menggunakan logika kondisional Blade untuk tampilan) --}}
                <div class="text-center">
                    @if ($status_lower == 1)
                        <span class="badge bg-success text-white py-2 px-3 fs-6 mb-3"><i class="bi bi-check-circle-fill me-2"></i> TRANSAKSI LUNAS</span>
                        <div class="action-button-group">
                            <button class="btn btn-sm btn-outline-dark">Cetak Struk <i class="bi bi-printer"></i></button>
                            <a href="#" class="btn btn-sm btn-secondary">Kembali</a>
                        </div>
                    @elseif ($status_lower == 0)
                        <span class="badge bg-warning text-dark py-2 px-3 fs-6 mb-3"><i class="bi bi-clock-fill me-2"></i> MENUNGGU KONFIRMASI</span>
                        <div class="action-button-group">
                            {{-- Tombol Konfirmasi (Tujuan form di-placeholder ke #) --}}
                            <form action="{{ route('transaksi.konfirmasi', $dataTransaksi->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success w-100 fw-bold">
                                    <i class="bi bi-check-lg me-1"></i> KONFIRMASI PEMESANAN
                                </button>
                            </form>
                        </div>
                    @elseif ($status_lower == 'batal')
                        <span class="badge bg-danger text-white py-2 px-3 fs-6 mb-3"><i class="bi bi-x-octagon-fill me-2"></i> TRANSAKSI DIBATALKAN</span>
                        <div class="action-button-group">
                            <a href="#" class="btn btn-sm btn-secondary">Kembali</a>
                        </div>
                    @else
                        <span class="badge bg-secondary text-white py-2 px-3 fs-6 mb-3"><i class="bi bi-info-circle-fill me-2"></i> STATUS TIDAK DIKETAHUI</span>
                        <div class="action-button-group">
                            <a href="#" class="btn btn-sm btn-secondary">Kembali</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection