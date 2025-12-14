<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function getTransaksisByUserId(){

    }
    public function konfirmasi(Request $request)
    {
        dd($request->id);
    }
}
