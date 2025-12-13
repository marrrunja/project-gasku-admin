<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formatWaktu = 'Asia/Jakarta';
        DB::table('gases')->insert([
            'stok' => 80,
            'pengumuman' => 'Gas sudah di restok',
            'harga' => 25000,
            'created_at' => now($formatWaktu),
            'updated_at' => now($formatWaktu)
        ]);
    }
}
