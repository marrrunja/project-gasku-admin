<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function manage_account()
    {
        return view('admin.manage_account');
    }
    public function buat_account()
    {
        return view('admin.buat_account');
    }

    public function inputStok(Request $request)
    {
        return view('admin.input-stok');
    }
}
