<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // udah bisa
    public function loginMobile(Request $request)
    {
        Log::info("API hit from mobile");
        $rules = [
            'username' => ['required'],
            'password' => ['required']
        ];
        $pesan = [
            'username.required' => 'Username tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!'
        ];
        $request->validate($rules, $pesan);

        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $request->username)->first();
        if(!$user || !Hash::check($request->password, $user->password) || $user->jenis_user === 2){
            throw ValidationException::withMessages([
                'kredensial' => ['Username atau password tidak cocok']
            ]);
        }
        if( $user->is_aktif === 0){
            return response()->json([
                'message' => 'Anda telah di blokir, silahkan hubungi admin untuk verifikasi lebih lanjut'
            ]);
        }
        $token = $user->createToken($request->username)->plainTextToken;
        $data = [
            'message' => 'Berhasil login',
            'username' => $username,
            'token' => $token,
            'jenis_user' => $user->jenis_user,
            'can_buy' => $user->can_buy
        ];
        return response()->json($data);
    }
    public function logoutMobile(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Berhasil logout'
        ]);
    }
    public function me(Request $request)
    {
        return response()->json([
            'user' => Auth::user()
        ]);
    }

   public function registerMobile(Request $request)
{
    // Cek apakah username sudah ada
    $user = User::where('username', $request->username)->first();
    if($user){
        return response()->json([
            'message' => 'Username sudah ada!'
        ]);
    }

    // Ambil data dari request
    $username = $request->username;
    $password = Hash::make($request->password); // enkripsi password
    $no_kk = $request->no_kk;
    $nama_lengkap = $request->nama_lengkap;
    $email = $request->email;
    $alamat = $request->alamat;

    // Format tanggal registrasi
    $tanggal_registrasi = Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY');

    // Simpan ke database
    DB::table('users')->insert([
        'username' => $username,
        'password' => $password,
        'no_kk' => $no_kk,
        'nama_lengkap' => $nama_lengkap,
        'jenis_user' => 0,
        'email' => $email,
        'alamat_lengkap' => $alamat,
        'created_at' => now(),
        'updated_at' => now(),
        'foto' => 'guest.png',
    ]);

    return response()->json([
        'message' => 'Registrasi berhasil!',
        'tanggal_registrasi' => $tanggal_registrasi
    ]);
}
}
