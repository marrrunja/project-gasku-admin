@extends('layout.layout')

@section('title', 'Detail Akun')

@push('styles')
<style>
    /* Variabel Warna: Tema Hijau */
    :root {
        --primary-color: #28c76f;
        /* Hijau Utama */
        --primary-dark: #1f9d55;
        /* Hijau Gelap untuk Hover */
        --danger-color: #ea5455;
        --secondary-text: #b9b9c3;
        --dark-text: #5e5873;
        --bg-light: #f8f8f8;
        --warning-color: #ff9f43;
        /* Oranye untuk status "Belum bisa beli" */
    }

    body {
        background-color: var(--bg-light);
    }

    .card-modern {
        background-color: #fff;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.05);
        /* Shadow lebih soft */
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .card-modern:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px 0 rgba(0, 0, 0, 0.1);
    }

    /* Header Styling - Tema Hijau */
    .card-header-modern {
        /* Gradasi Hijau Segar */
        background: linear-gradient(135deg, var(--primary-color) 0%, #159f48 100%);
        padding: 30px 25px;
        display: flex;
        align-items: center;
        color: white;
    }

    .profile-avatar {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin-right: 20px;
        backdrop-filter: blur(4px);
    }

    .profile-info h4 {
        margin: 0;
        font-weight: 600;
        font-size: 18px;
        letter-spacing: 0.5px;
    }

    .profile-info span {
        font-size: 13px;
        opacity: 0.9;
        font-weight: 300;
    }

    /* Content Styling */
    .card-body-modern {
        padding: 25px;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 0;
        border-bottom: 1px solid #ebe9f1;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .label-text {
        font-size: 13px;
        color: var(--secondary-text);
        /* Abu-abu soft */
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .value-text {
        font-size: 14px;
        color: var(--dark-text);
        font-weight: 600;
        text-align: right;
    }

    /* Status Badge */
    .status-badge {
        padding: 6px 14px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        color: white;
    }

    .status-badge.warning {
        background-color: var(--warning-color);
    }

    .status-badge.success {
        background-color: var(--primary-color);
    }


    /* Footer / Buttons Layout Fix */
    .card-footer-modern {
        padding: 0 25px 30px 25px;
        display: flex;
        gap: 15px;
    }

    /* FIX: Agar form bisa flex */
    .card-footer-modern form {
        flex: 1;
        display: flex;
        /* Penting agar tombol di dalamnya bisa diatur */
    }

    .btn-action {
        flex: 1;
        /* Agar kedua tombol (dan form) memiliki lebar yang sama */
        width: 100%;
        /* Penting untuk tombol di dalam form */
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    /* Tombol Hijau */
    .btn-approve {
        background-color: var(--primary-color);
        color: white;
        box-shadow: 0 4px 12px rgba(40, 199, 111, 0.4);
    }

    .btn-approve:hover {
        background-color: var(--primary-dark);
        box-shadow: 0 6px 15px rgba(40, 199, 111, 0.5);
    }

    .btn-block {
        background-color: transparent;
        color: var(--danger-color);
        border: 1px solid var(--danger-color);
    }

    .btn-block:hover {
        background-color: var(--danger-color);
        color: white;
        box-shadow: 0 4px 12px rgba(234, 84, 85, 0.4);
    }

</style>
@endpush

@section('body')

<section class="d-flex align-items-center" style="min-height: 80vh;">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-xl-5">

                <div class="card-modern">
                    <div class="card-header-modern">
                        <div class="profile-avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="profile-info">
                            <h4>{{$user->username}}</h4>
                            {{-- Saya asumsikan ini adalah Nomor KK atau ID --}}
                            <span>{{$user->no_kk ?? 'ID Tidak Tersedia'}}</span>
                        </div>
                    </div>

                    <div class="card-body-modern">

                        <div class="detail-row">
                            <span class="label-text">Nama Lengkap</span>
                            <span class="value-text">{{$user->nama_lengkap}}</span>
                        </div>

                        <div class="detail-row">
                            <span class="label-text">Email</span>
                            <span class="value-text">{{$user->email}}</span>
                        </div>

                        <div class="detail-row">
                            <span class="label-text">Nomor KK</span>
                            <span class="value-text">{{$user->no_kk}}</span>
                        </div>

                        <div class="detail-row">
                            <span class="label-text">Alamat</span>
                            <span class="value-text">{{$user->alamat_lengkap}}</span>
                        </div>

                        <div class="detail-row">
                            <span class="label-text">Tipe Akun</span>
                            <span class="value-text" style="color: var(--primary-color);">
                                {{ $user->jenis_user === 1 ? 'Distributor':'Pembeli' }}
                            </span>
                        </div>

                        <div class="detail-row">
                            <span class="label-text">Status Beli</span>
                            @php
                            $canBuy = $user->can_buy === 1;
                            $statusText = $canBuy ? 'BISA BELI' : 'BELUM BISA BELI';
                            $statusClass = $canBuy ? 'success' : 'warning';
                            @endphp
                            <span class="status-badge {{ $statusClass }}">
                                {{ $statusText }}
                            </span>
                        </div>
                    </div>

                    <div class="card-footer-modern">

                        {{-- Logika untuk tombol "Bisa beli" atau "Tidak bisa beli" --}}
                        @php
                        $isAktif = $user->is_aktif === 1; // Untuk tombol Blokir/Buka Blokir
                        $isCanBuy = $user->can_buy === 1; // Untuk tombol BISA BELI

                        $btnBeliRoute = $isCanBuy ? 'user.disable_buy' : 'user.enable_buy';
                        $btnBeliText = $isCanBuy ? 'Nonaktifkan Beli' : 'Aktifkan Beli';
                        $btnBeliIcon = $isCanBuy ? '❌' : '✅';

                        @endphp

                        {{-- Form untuk mengaktifkan/menonaktifkan kemampuan beli --}}
                        <form action="{{ route($btnBeliRoute, $user->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn-action btn-approve"
                                style="{{ $isCanBuy ? 'background-color: #f1c40f; box-shadow: 0 4px 12px rgba(241, 196, 15, 0.4);' : '' }}">
                                <span>{{ $btnBeliIcon }}</span> {{ $btnBeliText }}
                            </button>
                        </form>

                        {{-- Form untuk Blokir/Buka Blokir --}}
                        @php
                        $routeBlokir = $isAktif ? 'user.blokir':'user.buka';
                        $iconBlokir = $isAktif ? '🚫' : '🔓';
                        @endphp

                        <form action="{{ route($routeBlokir, $user->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn-action btn-block">
                                <span>{{ $iconBlokir }}</span> {{ $isAktif ? 'Blokir':'Buka Blokir' }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
