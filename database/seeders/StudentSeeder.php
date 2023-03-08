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
            'class_id' => 1,
            'address' => 'Bandung, Jawa Barat',
            'phone_number' => '08123123123',
            'spp_id' => 1 ,
            'user_id' => 3 ,

        ]);
    }
}
