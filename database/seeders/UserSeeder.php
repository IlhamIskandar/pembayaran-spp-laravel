<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('stafflogin'),
            'name' => 'Akun Staff',
            'role' => 'staff',
            'email' => 'email@staff.com',
        ]);

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('adminlogin'),
            'name' => 'Akun admin',
            'role' => 'admin',
            'email' => 'email@admin.com',
        ]);

        DB::table('users')->insert([
            'username' => 'siswa',
            'password' => Hash::make('siswalogin'),
            'name' => 'Akun siswa',
            'role' => 'siswa',
            'email' => 'email@siswa.com',
        ]);
    }
}
