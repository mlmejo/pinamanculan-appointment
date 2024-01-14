<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            ['name' => 'Barangay Clearance'],
            ['name' => 'Barangay Residences'],
            ['name' => 'Barangay Annual Income'],
            ['name' => 'Certificate of Indigent'],
            ['name' => 'Certificate of Senior Citizen'],
            ['name' => 'Certificate of PWD'],
            ['name' => 'Certificate of Indigent -- Health'],
        ]);
    }
}
