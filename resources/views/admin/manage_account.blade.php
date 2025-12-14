@extends('layout.layout')
@section('title', 'Manage Akun User')
@section('body')
<section class="pt-5 pb-3">


    <div class="container">

        <!-- Title -->
        <h3 class="text-center fw-semibold mb-3">Akun user yang tersedia</h3>

        <!-- Search -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control py-2" placeholder="Cari akun warga..."
                    aria-label="Contoh muammar" aria-describedby="basic-addon2" autocomplete="off" >
                    <span class="input-group-text bg-success text-white px-3"><i class="bi bi-search fw-bold"></i></span>
                   
                </div>
            </div>
        </div>

        <!-- LIST AKUN -->
        @php

        $count = count($users);
        @endphp

        <!-- RULE: Jika item hanya 1 → center -->
        <div>

            <div class="row {{ $count == 1 ? 'justify-content-center' : 'row-cols-1 row-cols-md-2' }} g-4 mb-4">

                @foreach ($users as $akun)
                @php
                $isAktif = $akun->is_aktif === 1;
                @endphp
                <div class="col-12 col-md-6">
                    <div class="d-flex justify-content-between align-items-center border rounded px-4 py-3 shadow-sm {{ !$isAktif ? 'bg-danger text-white':'' }}">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-person-circle fs-1"></i>
                            <div>
                                <p class="m-0 fw-bold">{{ $akun->nama_lengkap }}</p>
                                <small class="{{$isAktif ? 'text-dark':'text-light'}}">{{ $akun->no_kk }}</small>
                            </div>
                        </div>
                        <a href="{{route('admin.detail_akun', $akun->id)}}">
                            <button class="btn btn-{{$isAktif ?'success':'light'}} px-4 fw-semibold">lihat</button>
                        </a>

                    </div>
                </div>
                @endforeach

            </div>

        </div>

    </div>


</section>
@endsection
