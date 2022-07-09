<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_title' => 'CEO',
            'role_description' => 'Responsible for managing company\'s overall operations',
        ]);
        DB::table('roles')->insert([
            'role_title' => 'CTO',
            'role_description' => 'Responsible for managing company\'s technological operations',
        ]);
        DB::table('roles')->insert([
            'role_title' => 'HRD',
            'role_description' => 'Manages the company\'s human resources',
        ]);
        DB::table('roles')->insert([
            'role_title' => 'Overseer',
            'role_description' => 'Oversee Projects and tasks',
        ]);
        DB::table('roles')->insert([
            'role_title' => 'Project Leader',
            'role_description' => 'Lead a project',
        ]);
    }
}
