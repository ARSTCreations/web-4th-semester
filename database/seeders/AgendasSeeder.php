<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'employee_id' => 1,
            'title' => 'Agenda 1',
            'description' => 'Agenda 1',
            'location' => 'Jl. Kebon Kacang',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('agendas')->insert([
            'employee_id' => 1,
            'title' => 'Agenda 2',
            'description' => 'Agenda 2',
            'location' => 'Jl. Kebon Kacang',
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
