<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(array(
            array(
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make("12345"),
                'role' => 1
            ),
            array(
                'name' => 'Pembina',
                'username' => 'Pembina',
                'email' => 'pembina@gmail.com',
                'password' => Hash::make("12345"),
                'role' => 2
            ),
            array(
                'name' => 'User',
                'username' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make("12345"),
                'role' => 3
            ),
        ));
    }
}
