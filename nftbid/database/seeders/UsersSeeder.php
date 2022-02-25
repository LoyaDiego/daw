<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrador ',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('123'),
            'phone'=>'6361317900',
            'alias'=>'admin',
            'image'=>'default.jpg'
        ]);
        DB::table('users')->insert([
            'name'=>'Benito Juarez ',
            'email'=>'benito@gmail.com',
            'password'=> Hash::make('123'),
            'phone'=>'6361345484',
            'alias'=>'benito',
            'image'=>'default.jpg'
        ]);
    }
}
