<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function getTransaksisByUserId(){

    }
    public function konfirmasi(Request $request)
    {
        $id = $request->id;
        $updateTransaksi = DB::table('transaksis')->where('id', '=', $id)->update([
            'status' => 1
        ]);
        if($updateTransaksi > 0){
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
