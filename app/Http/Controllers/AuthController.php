<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function adminHome()
    {
        return view('admin.home'); // pastikan file admin/home.blade.php ada
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // pastikan route login ada
    }
}
