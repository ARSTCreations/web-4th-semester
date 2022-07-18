<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            'employee_id' => 1,
            'url' => '/files/file1.pdf',
            'title' => 'File 1',
            'status' => 'Pending',
        ]);
        DB::table('files')->insert([
            'employee_id' => 1,
            'url' => '/files/file2.pdf',
            'title' => 'File 2',
            'status' => 'Approved',
        ]);
        DB::table('files')->insert([
            'employee_id' => 1,
            'url' => '/files/file3.pdf',
            'title' => 'File 3',
            'status' => 'Pending',
        ]);
    }
}
