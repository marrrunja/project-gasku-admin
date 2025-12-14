<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GasController extends Controller
{
    private string $formatWaktu = 'Asia/Jakarta';
    public function index()
    {
        $gas = DB::table('gases')->get();
        return response()->json([
            'data' => $gas
        ]);
    }
    public function update(Request $request)
    {
        $updateStok = 0;
        $updatePengumuman = 0;
        if($request->jumlahGas != null)
            $updateStok = DB::table('gases')->where('id', 1)->increment('stok', $request->jumlahGas);

        if($request->pesan != null){
            $updatePengumuman = DB::table('gases')->where('id', 1)->update([
                'pengumuman' => $request->pesan
            ]);
        }

        if($updatePengumuman > 0 || $updateStok > 0){
            DB::table('gases')->where('id', 1)->update([
                'updated_at' => now($this->formatWaktu)
            ]);
            return redirect()->back()->with([
                'message' => 'Berhasil mengupdate data'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Belum ada yang diupdate'
        ]);
        
    }

    private function initOrderGas($user, ?string &$maxPembelian = null, $jumlah, ?string &$error = null)
    {
        if($user['jenis_user'] === 1) $maxPembelian = 10;
        else $maxPembelian = 1;

        if($jumlah > $maxPembelian){
            $error = 'Jumlah pembelian melebihi batas';
            return false;
        }
      
        if($user['can_buy'] == 0){
            $error = 'Saat ini anda tidak boleh melakukan pembelian!';
            return false;
        }
        $insertTransaksi = DB::table('transaksis')->insert([
            'jumlah_pembelian' => $jumlah,
            'id_gas' => 1,
            'id_user' => $user['id'],
            'created_at' => now($this->formatWaktu),
            'updated_at' => now($this->formatWaktu)
        ]);
        if($insertTransaksi > 0){
            $updateUser = DB::table('users')->where('id', $user['id'])->update([
                'can_buy' => 0
            ]);
            return true;
        }
        return false;

    }
    public function pembelian(Request $request):JsonResponse
    {
        $maxPembelian = null;
        $error = null;
        $user = Auth::user();
        $validasi = [
            'jumlah' => 'required',
        ];
        $pesanValidasi = [
            'jumlah.required' => 'Jumlah pembelian tidak boleh kosong!',
        ];
        $request->validate($validasi, $pesanValidasi);
        $hargaGas = DB::table('gases')->where('id', '=', 1)->first()->harga;

        if($this->initOrderGas($user, $maxPembelian, $request->jumlah, $error)){
            return response()->json([
                'message' => 'Berhasil melakukan pemesanan gas, silahkan lakukan pembayaran ke admin via whatsapp',
                'tanggal_transaksi' =>  Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY'),
                'jumlah' => $request->jumlah,
                'total'=>$request->jumlah * $hargaGas
            ]);
        }
        else {
             return response()->json([
                'message' => 'Gagal melakukan pemesanan gas!',
                'error' => $error
            ]);
        }
    }
    
}
 