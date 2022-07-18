<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'employee_id' => 1,
            'name' => 'Manager Kim',
            'email' => 'kim@mail.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'employee_id' => 2,
            'name' => 'Mbak Minji',
            'email' => 'minji@mail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
