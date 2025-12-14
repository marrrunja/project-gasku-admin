<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function getTransaksisByUserId(){
        $idUser = Auth::user()['id'];
        $transaksi = DB::table('transaksis')->where('id_user', '=', $idUser)->get();

        return response()->json([
            'data' => $transaksi,
            'harga' => DB::table('gases')->where('id', '=', 1)->first()->harga
        ]);
    }
    public function konfirmasi(Request $request)
    {
        $id = $request->id;
        $jumlahPembelian =DB::table('transaksis')->where('id', '=', $id)->first()->jumlah_pembelian;
        $updateTransaksi = DB::table('transaksis')->where('id', '=', $id)->update([
            'status' => 1
        ]);
        $updateGas = DB::table('gases')->where('id', 1)->decrement('stok', $jumlahPembelian);
        
        if($updateTransaksi > 0 && $updateGas){
            return redirect()->back()->with([
                'status' => 'success',
                'message' => 'Berhasil konfirmasi pemesanan'
            ]);
        }
        else {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => 'Gagal mengonfirmasi pemesanan'
            ]);
        }
    }
}
