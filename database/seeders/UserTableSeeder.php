<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB , Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //admin
            [
                'name' => 'Ramanpreet',
                'username' => 'Ramanpreet' ,
                'email' => 'raman@gmail.com',
                'password' =>Hash::make('123'),
                'role' => 'admin',
                'status' =>'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              //Agent
              [
                'name' => 'Simran',
                'username' => 'simran' ,
                'email' => 'simran@gmail.com',
                'password' =>Hash::make('123'),
                'role' => 'agent',
                'status' =>'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              //user
              [
                'name' => 'Pardeep',
                'username' => 'Pardeep' ,
                'email' => 'pardeep@gmail.com',
                'password' =>Hash::make('123'),
                'role' => 'user',
                'status' =>'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
