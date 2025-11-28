@extends('template.template')

@section('title', 'input stok gas')

@push('styles')
 <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=send" />
<link rel="stylesheet" href="{{ asset('resources/css/input_stok.css') }}">
@endpush
@section('body')
 <ul
    class="nav bg-utama p-3 justify-content-around justify-content-md-evenly justify-content-lg-evenly sticky-top px-sm-0 px-lg-5 px-md-5">
    <li class="nav-item awal">
      <a class="nav-link brand text-white fw-bold home" href="home_adm.php">
        <i class="bi bi-house-fill me-2"></i><span class="ilang">Home</span>
      </a>
    </li>
    
    <li class="nav-item tengah text-md-center">
      <a class="nav-link text-center text-white fw-semibold brand " href="#" id="inputStokGas">
        Input Stok Gas
      </a>
    </li>
  </ul>
<section id="inputStok" class="pt-5 pb-5">
    <div class="container">
        <form method="post" action="">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <h4 class="color-hijau text-center fw-bold mb-4">Input Jumlah Gas Yang masuk</h4>
                    <div class="card bg-input">
                        <div class="card-body d-flex justify-content-between">
                            <input type="text" class="form-control text-center" name="jumlahGas">
                            <div>
                                <button type="button" id="btn-tambah" class="me-0 me-md-0">
                                    <i class="bi bi-plus-lg fw-bold"></i>
                                </button>
                                <button type="button" id="btn-kurang">
                                    <i class="bi bi-dash fw-bold"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-8 mt-4">
                    <div class="card bg-saran pt-3 pb-3">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Masukkan Pesan anda (Opsional)</h4>
                            <div class="form-floating">
                                <textarea placeholder="Leave a comment here" id="floatingTextarea2" class="form-control"
                                    name="pesan" style="height:150px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-8 mt-4">
                    <button type="submit" name="kirim" class="form-control btn-kirim bg-saran"><span
                            class="kirim">Kirim</span>
                        <span class="material-symbols-outlined" style="transform: translateY(5px);">send</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
