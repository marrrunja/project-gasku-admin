<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\GasSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        try{
            $seeders = [
                UserSeeder::class
                // GasSeeder::class
            ];
            $this->call($seeders);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}
