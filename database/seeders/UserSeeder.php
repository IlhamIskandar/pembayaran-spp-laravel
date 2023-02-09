<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'staff',
            'password' => 'stafflogin',
            'name' => 'Akun Staff',
            'level' => 'staff',
            'email' => 'email@staff.com',
        ]);
    }
}
