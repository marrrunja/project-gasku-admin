<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // udah bisa
    public function loginMobile(Request $request)
    {
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
        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'kredensial' => ['Username atau email tidak cocok']
            ]);
        }
        $token = $user->createToken($request->username)->plainTextToken;
        $data = [
            'message' => 'Berhasil login',
            'username' => $username,
            'password' => $password,
            'token' => $token
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
}
