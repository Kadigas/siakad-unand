<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama'=>'Nopal Pardede',
            'angkatan'=>"2020",
            'IPK'=>'4.0',
            'user_id'=>'1',
        ]);

        DB::table('mahasiswa')->insert([
            'nama'=>'Fardani Putra S',
            'angkatan'=>"2020",
            'IPK'=>'3.90',
            'user_id'=>'4',
        ]);

        DB::table('mahasiswa')->insert([
            'nama'=>'Rizki Oktavian',
            'angkatan'=>"2020",
            'IPK'=>'3.33',
            'user_id'=>'5',
        ]);

        DB::table('mahasiswa')->insert([
            'nama'=>'Ibnu Muttaqin',
            'angkatan'=>"2020",
            'IPK'=>'3.51',
            'user_id'=>'6',
        ]);

        DB::table('mahasiswa')->insert([
            'nama'=>'Reyhan Julio A',
            'angkatan'=>"2020",
            'IPK'=>'3.72',
            'user_id'=>'7',
        ]);

        DB::table('mahasiswa')->insert([
            'nama'=>'Lusi Jelita Sari',
            'angkatan'=>"2020",
            'IPK'=>'3.8',
            'user_id'=>'8',
        ]);
    }
}
