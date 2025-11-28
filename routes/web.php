<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/input-stok', [AdminController::class, 'inputStok']);