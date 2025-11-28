@extends('template.template')

@section('title', 'Halaman Registrasi Distributor')

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="register-card p-4 p-md-5">
                <h2 class="text-center mb-4 fw-bold" style="color: #4CAF50;">REGISTER FORM</h2>
                <form action="#" method="POST">
                    @csrf
                    
                    <div class="row mb-3 gx-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control form-control-rounded" name="nama_depan" placeholder="Nama Depan" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-rounded" name="nama_belakang" placeholder="Nama Belakang" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control form-control-rounded" name="nomor_kk" placeholder="Nomor Kartu Keluarga" required>
                    </div>

                    <div class="row mb-3 gx-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="email" class="form-control form-control-rounded" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control form-control-rounded" name="no_hp" placeholder="No. HP" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <textarea class="form-control form-control-rounded" name="alamat" placeholder="Alamat" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="input-group password-input-group">
                            <input type="password" class="form-control form-control-rounded" id="password" name="password" placeholder="Password" required>
                            <span class="input-group-text border-start-0" onclick="togglePasswordVisibility('password')">
                                <i class="bi bi-eye" id="togglePassword"></i> 
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group password-input-group">
                            <input type="password" class="form-control form-control-rounded" id="confirm_password" name="password_confirmation" placeholder="Ulangi Password" required>
                            <span class="input-group-text border-start-0" onclick="togglePasswordVisibility('confirm_password')">
                                <i class="bi bi-eye" id="toggleConfirmPassword"></i>
                            </span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <input type="text" class="form-control form-control-rounded" name="kode_distributor" placeholder="Kode Distributor = 1" value="1" readonly>
                    </div>

                    <div class="row gx-3">
                        <div class="col-6">
                            <button type="button" class="btn btn-cancel w-100 fw-bold">Batal</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-create w-100 fw-bold">Buat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
        background-color: #6EAF7C; /* Latar belakang abu-abu terang */
        font-family: 'Poppins', sans-serif;
    }
    .register-card {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .form-control-rounded {
        border-radius: 15px; /* Membuat input lebih membulat */
        padding: 12px 20px;
    }
    .form-control:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 0 0.25rem rgba(76, 175, 80, 0.25);
    }
    .btn-create {
        background-color: #4CAF50; /* Hijau seperti pada gambar */
        border-color: #4CAF50;
        color: white;
        border-radius: 15px;
        padding: 10px 0;
        transition: background-color 0.3s ease;
    }
    .btn-create:hover {
        background-color: #45a049;
        border-color: #45a049;
        color: white;
    }
    .btn-cancel {
        background-color: #BDBDBD; /* Abu-abu seperti pada gambar */
        border-color: #BDBDBD;
        color: white;
        border-radius: 15px;
        padding: 10px 0;
        transition: background-color 0.3s ease;
    }
    .btn-cancel:hover {
        background-color: #a0a0a0;
        border-color: #a0a0a0;
        color: white;
    }
    .password-input-group .input-group-text {
        background-color: white;
        border-left: none;
        border-radius: 0 15px 15px 0;
        border-color: #ced4da;
    }
    .password-input-group .form-control {
        border-right: none;
    }
</style>
@endpush

@push('scripts')
<script>
    function togglePasswordVisibility(id) {
        const passwordField = document.getElementById(id);
        const icon = passwordField.nextElementSibling.querySelector('i');
        
        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            passwordField.type = "password";
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>
@endpush