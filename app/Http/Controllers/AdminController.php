<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function manage_account()
    {
        $users = DB::table('users')->where('jenis_user', '<>', 2)->get();
        $data = [
            'users' => $users
        ];
        return view('admin.manage_account', $data);
    }
    public function buat_account()
    {
        return view('admin.buat_account');
    }
    public function aktivitas_pembeli()
    {
        return view('admin.aktivitas_pembeli');
    }
    public function detail_transaksi()
    {
        return view('admin.detail_transaksi');
    }
    public function detail_akun()
    {
        return view('admin.detail_akun');
    }
    public function inputStok(Request $request)
    {
        return view('admin.input-stok');
    }
}
