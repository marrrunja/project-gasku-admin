@extends('layout.layout')
@section('title', 'Manage Akun User')
@section('body')
    <section>


        <div class="container">

            <!-- Title -->
            <h3 class="text-center fw-bold mb-1">AKUN USER YANG TERSEDIA</h3>

            <!-- Search -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari akun...">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    </div>
                </div>
            </div>

            <!-- LIST AKUN -->
            @php
                $akun = [
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                    ['name' => 'PEOPLE +62', 'phone' => '012345678901112'],
                ];

                $count = count($akun);
            @endphp

            <!-- RULE: Jika item hanya 1 → center -->
            <div>

                <div class="row {{ $count == 1 ? 'justify-content-center' : 'row-cols-1 row-cols-md-2' }} g-4">

                    @foreach ($akun as $item)
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center border rounded p-3 shadow-sm">

                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-person-square fs-1 text-secondary"></i>
                                    <div>
                                        <p class="m-0 fw-bold">{{ $item['name'] }}</p>
                                        <small class="text-muted">{{ $item['phone'] }}</small>
                                    </div>
                                </div>

                                <button class="btn btn-danger px-4 fw-bold">Blokir</button>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>


    </section>
@endsection