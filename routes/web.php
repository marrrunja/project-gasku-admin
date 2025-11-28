<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/makeaccount', function () {
    return view('admin.makeaccount');
});
Route::get('/admin/makeaccount/success', function () {
    return view('admin.makeaccountsuccess');
});
Route::get('/admin/makeaccount/failed', function () {
    return view('admin.makeaccountfailed');
});
Route::get('/admin/detail-akun', function () {
    return view('admin.detail-akun');
});