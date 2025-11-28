<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD
    public function index()
=======
    public function home()
>>>>>>> e7202235dc0753fcb065ae0837d72236beb1de8c
    {
        return view('admin.home');
    }

<<<<<<< HEAD
    public function inputStok(Request $request)
    {
        return view('admin.input-stok');
=======
    public function showRegister()
    {
        return view('admin.register');
    }

    public function registerProcess(Request $request)
    {
        // Validasi & simpan admin baru
        $request->validate([
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:6|confirmed',
        ]);

        \DB::table('admins')->insert([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.home')->with('success', 'Admin berhasil dibuat');
    }

    public function manageAccount()
    {


        return view(
            'admin.manage_account'

        );
    }

    public function activity()
    {
        return view('admin.activity');
    }

    public function inputStok()
    {
        return view('admin.input_stok');
    }

    public function storeStok(Request $request)
    {
        $request->validate([
            'jumlah' => 'required|numeric',
        ]);

        \DB::table('gases')->insert([
            'stok' => $request->stok,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.inputStok')->with('success', 'Stok berhasil ditambahkan');
    }

    public function pesanan()
    {
        return view('admin.pesanan');
>>>>>>> e7202235dc0753fcb065ae0837d72236beb1de8c
    }
}
