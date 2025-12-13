<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GasController extends Controller
{
    public function index()
    {
        $gas = DB::table('gases')->get();
        return response()->json([
            'data' => $gas
        ]);
    }
    public function editTableGas()
    {
        // $gas = DB::table('gases');
    }
}
