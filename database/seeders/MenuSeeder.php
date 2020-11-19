<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
         DB::table('menus')->insert([
            [
                'role_id'=>1,
                'menutitle_id'=>1,
                'name' => "Beranda",
                'icon'=>"fas fa-home",
                'url'=>"/home",
                'is_active'=>1,
                'order'=>1,
            ],
            [
                'role_id'=>1,
                'menutitle_id'=>1,
                'name' => "Menu Manager",
                'icon'=>"fas fa-tasks",
                'url'=>"/admin/menu",
                'is_active'=>1,
                'order'=>3,
            ],
            [
                'role_id'=>1,
                'menutitle_id'=>1,
                'name' => "Data anggota",
                'icon'=>"fas fa-users",
                'url'=>"/admin/members",
                'is_active'=>1,
                'order'=>2,
            ],
            [
                'role_id'=>1,
                'menutitle_id'=>1,
                'name' => "Setup Manager",
                'icon'=>"fas fa-tools",
                'url'=>"/admin/setup",
                'is_active'=>1,
                'order'=>3,
            ],
            [
                'role_id'=>1,
                'menutitle_id'=>1,
                'name' => "Users",
                'icon'=>"fas fa-users",
                'url'=>"/admin/user",
                'is_active'=>1,
                'order'=>4,
            ],
            [
                'role_id'=>2,
                'menutitle_id'=>2,
                'name' => "Data anggota",
                'icon'=>"fas fa-users",
                'url'=>"/member/add",
                'is_active'=>1,
                'order'=>1,
            ],
            [
                'role_id'=>3,
                'menutitle_id'=>3,
                'name' => "Lengkapi data",
                'icon'=>"fas fa-user-plus",
                'url'=>"/member/lengkapidata",
                'is_active'=>1,
                'order'=>1,
            ],
            [
                'role_id'=>3,
                'menutitle_id'=>3,
                'name' => "Data saya",
                'icon'=>"fas fa-user",
                'url'=>"/member/datasaya",
                'is_active'=>1,
                'order'=>1,
            ],
            [
                'role_id'=>3,
                'menutitle_id'=>3,
                'name' => "Data anggota",
                'icon'=>"fas fa-users",
                'url'=>"/member/datasaya",
                'is_active'=>1,
                'order'=>1,
            ],
            [
                'role_id'=>3,
                'menutitle_id'=>3,
                'name' => "Undangan",
                'icon'=>"fas fa-bullhorn",
                'url'=>"/member/datasaya",
                'is_active'=>1,
                'order'=>1,
            ],
         ]);
    }
}
