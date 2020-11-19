<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenutitleSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('menutitles')->insert([
            [
                'name'=>'Admin',
                'role_id'=>1,
                'is_active'=>1,
            ],
            [
                'name'=>'Operator',
                'role_id'=>2,
                'is_active'=>1,
            ],
            [
                'name'=>'Member',
                'role_id'=>3,
                'is_active'=>1,
            ],
        ]);
    }
}
