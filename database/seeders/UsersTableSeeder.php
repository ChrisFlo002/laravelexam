<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name'=> 'Admin',
                'username'=> 'admin',
                'email'=> 'admin@example.com',
                'password'=> Hash::make('123456789'),
                'role'=> 'admin',
                'status'=> 'active'
            ],
            //user
            [
                'name'=> 'User',
                'username'=> 'user',
                'email'=> 'user@example.com',
                'password'=> Hash::make('123456789'),
                'role'=> 'user',
                'status'=> 'active'
            ]
        ]);

    }
}
