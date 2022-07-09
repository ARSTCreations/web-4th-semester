<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'role_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@mail.com',
            'phone' => '081234567890',
            'address' => 'Jl. Kebon Kacang No. 1',
        ]);
        DB::table('employees')->insert([
            'role_id' => 2,
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'janedoe@gmail.com',
            'phone' => '081234567890',
            'address' => 'Jl. Kebon Kacang No. 1',
        ]);
    }
}
