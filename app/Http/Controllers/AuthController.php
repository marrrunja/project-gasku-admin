<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Ambil field yang digunakan untuk login
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // Proses login
        if (Auth::attempt($credentials)) {
            if(Auth::user()['jenis_user'] === 2){
                $request->session()->regenerate(); // penting agar session aman
                return redirect()->route('admin.home');
            }
            else 
                return redirect()->route('login')->with('error', 'Kredensial tidak cocok');
        }

        return redirect()->route('login')->with('error', 'Username atau password salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function adminHome()
    {
        return view('admin.home'); // pastikan file admin/home.blade.php ada
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil logout');
    }

}
