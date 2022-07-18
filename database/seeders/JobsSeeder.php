<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'job_title' => 'IT Manager',
            'department_id' => 1,
        ]);
        DB::table('jobs')->insert([
            'job_title' => 'Sales Operator',
            'department_id' => 2,
        ]);
        DB::table('jobs')->insert([
            'job_title' => 'Marketing Consultant',
            'department_id' => 3,
        ]);
    }
}
