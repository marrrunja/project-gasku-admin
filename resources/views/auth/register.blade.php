@extends('layout.layout_login_regis')
@section('title', 'Register')
@section('content')
<div class="content-wrapper">
    <div class="card mt-3 border-0 rounded-4 shadow">
        <div class="card-body">
            <h5 class="card-title text-center mb-4 text-success">Halaman Login</h5>

            <form method="POST" action="">

                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap"
                        required>
                </div>

                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan Username" required>
                </div>

                <div class="mb-3">
                    <input name="nokk" type="text" class="form-control" placeholder="Nomor Kartu Keluarga" required>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-12 col-md-6">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <input name="nohp" type="tel" class="form-control" placeholder="No. HP" required>
                    </div>
                </div>

                <div class="mb-3">
                    <input name="alamat" type="text" class="form-control" placeholder="Alamat" required>
                </div>

                <div class="position-relative mb-3">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password"
                        required>
                    <span class="toggle-password bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-3"
                        onclick="togglePassword('password')" style="cursor: pointer;"></span>
                </div>

                <div class="position-relative mb-3">
                    <input name="password2" type="password" class="form-control" id="confirm-password"
                        placeholder="Ulangi Password" required>
                    <span class="toggle-password bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-3"
                        onclick="togglePassword('password')" style="cursor: pointer;"></span>
                </div>

                <button name="regis" type="submit" class="btn btn-success w-100">Register</button>

                <div class="text-center small">
                    <div class="mt-3"> Sudah Menjadi Member? <a href="{{ route('login') }}" class=" text-success"
                            style="text-decoration: none;">Login</a></div>
                    <div class="mt-2"> Untuk Pembuatan Akun Distributor (Pemilik Toko Sembako) <br>
                        Silahkan Datang Langsung Ke Pangkalan Untuk
                        Pendataan Lebih Rinci
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>