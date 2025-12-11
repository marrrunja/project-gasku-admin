@extends('layout.layout')

@section('title', 'Aktivitas pembeli')
@section('body')
    <section style="min-height:77vh;">
        <section class="content-wrapper">
            <div class="container py-1 px-4 mt-3">
                <!-- Back button -->
                <div class="d-flex mb-2 align-items-center justify-content-center">
                    <!-- Header -->
                    <h3 class="header-text">SILAHKAN LIHAT DETAIL UNTUK MEMERIKSA RIWAYAT TRANSAKSI PEMBELI
                    </h3>
                    <span> </span>
                </div>

                <!-- Search bar -->
                <div class="d-flex align-items-center justify-content-between">
                    <div class="urutkan">
                        <label for="">Urutkan</label>
                        <select>
                            <option>Terbaru</option>
                            <option>Terlama</option>
                        </select>
                    </div>
                    <div>
                        <form method="get" action="">
                            <div class="input-group mb-3 rounded-pill position-relative">

                                <input type="text" name="pencarian" class="form-control rounded pe-5"
                                    placeholder="Search..." aria-label="Search">
                                <button type="submit" name="tombolCari" class="input-group-text px-3"
                                    style="width:50px; margin-left:-10px;">
                                    <i class="cari bi bi-search fw-bold"></i>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- tarnsaksi card -->

                <div class="row">

                    <div class="d-flex justify-content-between align-items-center border rounded p-3 shadow-sm px-5 mb-4">
                        <div class="fs-5">tgl</div>
                        <div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="m-0 fw-bold">nama leedefewwEngkap</p>
                                <small class="text-muted">nik</small>
                            </div>
                        </div>
                        <div class="fs-5" style="color:#198754;">
                            <a href="{{route('admin.detail_transaksi')}}" style="text-decoration:none; color:#198754;">lihat
                                detail
                                <i class=" bi bi-info-circle"></i>
                            </a>

                        </div>
                    </div>



                </div>
            </div>
        </section>
    </section>

@endsection