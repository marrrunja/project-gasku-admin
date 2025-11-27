@extends('layout.layout')
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('{{ asset("image/bg_home_admin.jpeg") }}');
        background-size: cover;
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .bg-utama {
        background-color: rgb(110, 175, 124);
    }

    .link {
        text-decoration: none;
        color: rgba(73, 155, 91, .8);
        transition: .3s;
    }

    .link:hover {
        text-decoration: underline;
    }

    .pilihan {
        border: 1px solid #393939;
        box-shadow: black 0px 2px 5px;
        border-radius: 12px !important;
        color: rgb(110, 175, 124);
        font-weight: bold;
        min-width: 20rem;
        height: 182px;
    }

    .card-body i {
        font-size: 4rem;
    }

    .foto-profil {
        box-shadow: 0 0 3px 3px rgba(255, 255, 255, .9);
    }
</style>
@section('title', 'Home Admin')
@section('content')
    <section id="menu" class="d-flex justify-content-center align-items-center mt-5 pb-5">
        <div class="container">
            <div class="row justify-content-sm-center">

                <div class="col-12 col-md-6 col-lg-4 mb-2 me-lg-1">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-person-gear fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="{{ route('admin.manageAkun') }}" class="link">Manage Account</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-2">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-activity fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="{{ route('admin.activity') }}" class="link">Aktivitas Pembeli</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-2">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-megaphone fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="{{ route('admin.inputStok') }}" class="link">Input Stok Gas</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card pilihan">
                        <div class="card-body text-center">
                            <i class="bi bi-cart fw-bold"></i>
                            <h3 class="card-text fw-bold translate">
                                <a href="{{ route('admin.pesanan') }}" class="link">Pesanan</a>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection