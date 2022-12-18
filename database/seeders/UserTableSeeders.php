<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'502520001',
            'email'=>"502520001@mail.com",
            'password'=>Hash::make('Adbgsd05'),
        ]);

        DB::table('users')->insert([
            'name'=>'502500001',
            'email'=>"502500001@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'000000001',
            'email'=>"000000001@mail.com",
            'password'=>Hash::make('123456'),
        ]);
    }
}
