<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_lengkap' => 'Muammar Irfan',
                'username' => 'Marr123',
                'jenis_user' => 0,
                'can_buy' => 1,
                'foto' => 'placeholder.png',
                'alamat_lengkap' => 'jambi',
                'no_kk' => '02112022323213',
                'email' => 'muammarirfan21@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'nama_lengkap' => 'Muammar aja',
                'jenis_user' => 1,
                'username' => 'irfan123',
                'can_buy' => 1,
                'foto' => 'placeholder.png',
                'alamat_lengkap' => 'jambi seberang',
                'no_kk' => '021120223232135454',
                'email' => 'muammarirfan213@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'nama_lengkap' => 'Ranpo edogawa',
                'username' => 'edogawa12',
                'jenis_user' => 2,
                'can_buy' => 0,
                'foto' => 'placeholder.png',
                'alamat_lengkap' => 'jambi',
                'no_kk' => '0211202232321390',
                'email' => 'ranpo@gmail.com',
                'password' => Hash::make('password')
            ],
        ];
        DB::table('users')->insert($data);
    }
}
