<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfilController extends Controller
{
    public function ubah(Request $request)
    {

        $username = $request->username;
        $nama_lengkap = $request->nama_lengkap;
        $email = $request->email;
        $alamat = $request->alamat;
        $no_kk = $request->no_kk;

        try{

            $updateData = DB::table('users')->where('username', '=', $username)->update([
                'username' => $username,
                'email' => $email,
                'alamat_lengkap' => $alamat,
                'no_kk' => $no_kk,
                'nama_lengkap' => $nama_lengkap
            ]);

            if($updateData > 0){
                return response()->json([
                    'message' => 'Berhasil update data user'
                ]);
            }
            else {
                return response()->json([
                    'message' => 'Belum ada yang diupdate'
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }   
    }
}
