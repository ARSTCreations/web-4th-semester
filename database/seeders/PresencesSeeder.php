<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presences')->insert([
            'employee_id' => 1,
            'date' => '2020-01-01 07:15:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('presences')->insert([
            'employee_id' => 2,
            'date' => '2020-01-01 08:15:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
