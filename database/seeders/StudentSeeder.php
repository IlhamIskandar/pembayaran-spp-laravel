<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'nisn' => 123123,
            'nis' => 0050000001,
            'name' => 'Ilham Iskandar',
            'password' => '321321',
            'id_class' => 1,
            'address' => 'Bandung, Jawa Barat',
            'phone_number' => '08123123123',
            'id_spp' => 1 ,
        ]);
    }
}
