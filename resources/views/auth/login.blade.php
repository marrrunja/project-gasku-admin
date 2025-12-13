@extends('layout.layout_login_regis')
@section('title', 'Login')
@section('content')
<section>
    <div class="content-wrapper">
        <div class="card mt-3 border-0 rounded-4 shadow">
            <div class="card-body">
                <h5 class="card-title text-center mb-4 text-success">Halaman Login</h5>
                @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login.process') }}">
                    @csrf
                    <label for="username" class="form-label">Username</label>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username" required>
                    </div>
                    <!-- Password -->
                    <label for="password" class="form-label">Password</label>
                    <div class="form-group mb-3 position-relative">
                        <input type="password" class="form-control pe-5" id="password" name="password"
                            placeholder="Masukkan Password" required>

                        <!-- Ikon Mata -->
                        <span
                            class="toggle-password bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-3"
                            onclick="togglePassword('password')" style="cursor: pointer;"></span>
                    </div>

                    <!-- Forgot Password -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="forgetpass.php" class="forgot-password fw-bold text-success"
                            style="text-decoration: none;">Lupa
                            Password?</a>
                    </div>
                    <!-- Login Button -->
                    <button type="submit" class="btn btn-success w-100 text-center">Login</button>
                    <!-- Register Link -->
                    <p class="register-link text-center mt-3 ">
                        Belum Punya Akun? <a href="{{ route('register') }}" class="text-success fw-bold"
                            style="text-decoration: none;"> Register Sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script src="{{ asset('js/login.js') }}"></script>
@endpush
