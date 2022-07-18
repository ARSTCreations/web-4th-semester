<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'department_name' => 'IT',
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Sales',
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Marketing',
        ]);
    }
}
