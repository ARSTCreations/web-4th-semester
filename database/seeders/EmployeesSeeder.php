<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'job_id' => 1,
            'full_name' => 'Manager Kim',
            'working_status' => 'Active',
            'salary' => 100000,
            'phone' => '081234567890',
            'address' => 'Jl. Kebon Kacang',
            'birth_place' => 'Jakarta',
            'birth_date' => '1990-01-01',
            'gender' => '1',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('employees')->insert([
            'job_id' => 2,
            'full_name' => 'Mbak Minji',
            'working_status' => 'Active',
            'salary' => 100000,
            'phone' => '081234567890',
            'address' => 'Jl. Kebon Kacang',
            'birth_place' => 'Jakarta',
            'birth_date' => '1990-01-01',
            'gender' => '1',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
