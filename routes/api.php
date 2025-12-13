<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GasController;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/coba', function(){
    $data = [
        [
            'nama' => 'Muammar',
            'NIM' => 'F1E123040'
        ],
         [
            'nama' => 'Muammar',
            'NIM' => 'F1E123040'
        ],
    ];
    return response()->json($data);
});
Route::get('/user/get', function(){
    $users = User::all();
    return response()->json([
        'users' => $users
    ]);
});
Route::get('/gas/get', [GasController::class, 'index'])->middleware(['auth:sanctum']);
Route::post('/login', [AuthController::class, 'loginMobile']);
Route::post('/logout', [AuthController::class, 'logoutMobile'])->middleware(['auth:sanctum']);
Route::get('/me', [AuthController::class, 'me'])->middleware(['auth:sanctum']);