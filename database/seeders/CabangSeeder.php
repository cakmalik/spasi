<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cabang')->insert([
            [
                'cabang'=>'Pusat',
            ],
            [
                'cabang'=>'Jember timur',
            ],
            [
                'cabang'=>'Jember barat',
            ],
            [
                'cabang'=>'Jember utara',
            ],
            [
                'cabang'=>'Lumajang',
            ],
            [
                'cabang'=>'Probolinggo',
            ],
            [
                'cabang'=>'Situbondo',
            ],
            [
                'cabang'=>'Bondowoso',
            ],
            [
                'cabang'=>'Madura',
            ],
        ]);
    }
}
