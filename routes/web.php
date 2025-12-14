<?php

use Illuminate\Auth\Events\Logout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\GasController;
use App\Http\Controllers\API\TransaksiController;

Route::get('/', [HomeController::class, 'welcome']);





Route::post('/gas/update', [GasController::class, 'update'])->name('gas.update');
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::get('/admin/manage_account', [AdminController::class, 'manage_account'])->name('admin.manage_account');
Route::get('/admin/input-stok', [AdminController::class, 'inputStok']);
Route::get('/admin/buat_account', [AdminController::class, 'buat_account'])->name('admin.buat_account');
Route::get('/admin/aktivitas_pembeli', [AdminController::class, 'aktivitas_pembeli'])->name('admin.aktivitas_pembeli');
Route::get('/admin/detail_transaksi/{id}', [AdminController::class, 'detail_transaksi'])->name('admin.detail_transaksi');
Route::get('/admin/detail_akun/{id}', [AdminController::class, 'detail_akun'])->name('admin.detail_akun');

Route::post('/admin/blokir/{id}', [AdminController::class, 'blokir'])->name('user.blokir');
Route::post('/admin/buka/{id}', [AdminController::class, 'buka'])->name('user.buka');

Route::post('/admin/cannotBuy/{id}', [AdminController::class, 'not_beli'])->name('user.not_beli');
Route::post('/admin/canBuy/{id}', [AdminController::class, 'beli'])->name('user.beli');

Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::get('/gas/get', [GasController::class, 'index']);

Route::post('/transaksi/konfirmasi/{id}', [TransaksiController::class, 'konfirmasi'])->name('transaksi.konfirmasi');