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
    public function detail_akun(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('id', $id)->first();
        $data = [
            'user' => $user
        ];
        return view('admin.detail_akun', $data);
    }
    public function inputStok(Request $request)
    {
        return view('admin.input-stok');
    }

    public function blokir(Request $request){
        dd($request->id);
    }
    public function buka(Request $request){
        dd($request->id);
    }
}
