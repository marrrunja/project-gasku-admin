<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Contoh: ambil dari database tabel stok_gas
        $data = \DB::table('gases')->latest()->first();

        $stok = $data->stok ?? 0;
        $tanggal_pengumuman = $data->updated_at ?? now();

        return view('index', compact('stok', 'tanggal_pengumuman'));
    }

}
