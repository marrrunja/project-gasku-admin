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
        $dataTransaksis = DB::table('transaksis')->join('users', 'transaksis.id_user', '=', 'users.id')
            ->select(
                'users.no_kk', 
                'users.nama_lengkap', 
                'transaksis.created_at', 
                'transaksis.status', 
                'transaksis.id',
                'transaksis.jumlah_pembelian'
            )
            ->get();
        $data = [
            'dataTransaksis' => $dataTransaksis
        ];
        return view('admin.aktivitas_pembeli', $data);
    }
    public function detail_transaksi(Request $request)
    {
        $harga = DB::table('gases')->where('id', '=', 1)->first()->harga;
        $dataTransaksi = DB::table('transaksis')->join('users', 'transaksis.id_user', '=', 'users.id')
        ->where('transaksis.id', '=', $request->id)
        ->select( 
            'users.username', 
            'transaksis.id',
            'transaksis.created_at', 
            'transaksis.status', 
            'transaksis.jumlah_pembelian'
        )
        ->first();
        $data = [
            'dataTransaksi' => $dataTransaksi,
            'harga' => $harga
        ];
        return view('admin.detail_transaksi',  $data);
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
         $id = $request->id;
        $blokirUser = DB::table('users')->where('id', '=', $id)->update([
            'is_aktif' => 0
        ]);
        if($blokirUser > 0){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => "Berhasil memblokir "
            ]);
        }
        else {
              return redirect()->back()->with([
                'status' => 'warning',
                'message' => "Gagal memblokir user"
            ]);
        }
    }
    public function buka(Request $request){
        $id = $request->id;
        $bukaBlokirUser = DB::table('users')->where('id', '=', $id)->update([
            'is_aktif' => 1
        ]);
        if($bukaBlokirUser > 0){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => "Berhasil membuka blokir "
            ]);
        }
        else {
              return redirect()->back()->with([
                'status' => 'warning',
                'message' => "Gagal membuka memblokir user"
            ]);
        }
    }

    public function beli(Request $request){
        $id = $request->id;
        $updateCanBuy = DB::table('users')->where('id', '=', $id)->update([
            'can_buy' => 1
        ]);
         if($updateCanBuy > 0){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => "Berhasil memperbarui status pembeli"
            ]);
        }
        else {
              return redirect()->back()->with([
                'status' => 'warning',
                'message' => "Gagal memperbarui status pembeli"
            ]);
        }
    }
    public function not_beli(Request $request){
        $id = $request->id;
        $updateCanBuy = DB::table('users')->where('id', '=', $id)->update([
            'can_buy' => 0
        ]);
         if($updateCanBuy > 0){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => "Berhasil memperbarui status pembeli"
            ]);
        }
        else {
              return redirect()->back()->with([
                'status' => 'warning',
                'message' => "Gagal memperbarui status pembeli"
            ]);
        }
    }
}
