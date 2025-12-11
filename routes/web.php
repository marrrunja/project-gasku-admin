<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', [HomeController::class, 'welcome']);





Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
Route::get('/admin/manage_account', [AdminController::class, 'manage_account'])->name('admin.manage_account');
Route::get('/admin/input-stok', [AdminController::class, 'inputStok']);
Route::get('/admin/buat_account', [AdminController::class, 'buat_account'])->name('admin.buat_account');
Route::get('/admin/aktivitas_pembeli', [AdminController::class, 'aktivitas_pembeli'])->name('admin.aktivitas_pembeli');
Route::get('/admin/detail_transaksi', [AdminController::class, 'detail_transaksi'])->name('admin.detail_transaksi');
Route::get('/admin/detail_akun', [AdminController::class, 'detail_akun'])->name('admin.detail_akun');


Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/register', [AuthController::class, 'register'])->name('register');