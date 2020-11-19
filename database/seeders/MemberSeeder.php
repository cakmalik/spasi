<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $users = User::get();
        foreach($users as $iii){
            $faker = Factory::create();
            DB::table('members')->insert([[
                'nia'=>131312,
                'nik'=>rand(111111,99999999),
                'nama_lengkap'=>$faker->name,
                'nama_panggilan'=>$faker->name,
                'alamat'=>$faker->address,
                'desa'=>$faker->address,
                'kecamatan'=>$faker->address,
                'kota'=>$faker->city,
                'provinsi'=>$faker->name,
                'hp'=>rand(1111,999999),
                'ayah'=>$faker->name,
                'pekerjaan_ayah'=>$faker->name,
                'ibu'=>$faker->name,
                'pekerjaan_ibu'=>$faker->name,
                'anak_ke'=>1,
                'jml_saudara'=>1,
                'cabang'=>$faker->name,
                'angkatan'=>2014,
                'kader_dari'=>$faker->name,
                'foto'=>'default.jpg',
            ]],
            );
        }
    }
}
