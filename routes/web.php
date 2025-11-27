<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin/home', [AuthController::class, 'adminHome'])->name('admin.home');

Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'registerProcess'])->name('admin.register.process');

Route::get('/admin/manage-account', [AdminController::class, 'manageAccount'])->name('admin.manageAkun');
// Route::post('/admin/manage-account', [AdminController::class, 'manageAccount'])->name('admin.manageAkun.search');

Route::get('/admin/activity', [AdminController::class, 'activity'])->name('admin.activity');

Route::get('/admin/input-stok', [AdminController::class, 'inputStok'])->name('admin.inputStok');
Route::post('/admin/input-stok', [AdminController::class, 'storeStok'])->name('admin.storeStok');

// 
Route::get('/admin/pesanan', [AdminController::class, 'pesanan'])->name('admin.pesanan');






