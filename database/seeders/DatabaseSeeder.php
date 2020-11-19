<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MenutitleSeeder::class,
            MenuSeeder::class,
            SetupSeeder::class,
            RoleSeeder::class,
            CabangSeeder::class,
    ]);
    }
}
