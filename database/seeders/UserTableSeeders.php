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
            'name'=>'5025200001',
            'email'=>"502520001@mail.com",
            'password'=>Hash::make('Adbgsd05'),
        ]);

        DB::table('users')->insert([
            'name'=>'5025000001',
            'email'=>"502500001@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'0000000001',
            'email'=>"000000001@mail.com",
            'password'=>Hash::make('123456'),
        ]);
        
        DB::table('users')->insert([
            'name'=>'5025200002',
            'email'=>"502520002@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'5025200003',
            'email'=>"502520003@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'5025200004',
            'email'=>"502520004@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'5025200005',
            'email'=>"502520005@mail.com",
            'password'=>Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name'=>'5025200006',
            'email'=>"502520006@mail.com",
            'password'=>Hash::make('123456'),
        ]);
    }
}
