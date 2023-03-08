<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('classes')->insert([
            // 'id_class' => null,
            'class_name' => 'XII',
            'competency' => 'Rekayasa Perangkat Lunak',
        ]);
    }
}
