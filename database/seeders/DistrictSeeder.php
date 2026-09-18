<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'name' => 'Gert Sibande Basketball League',
                'short_name' => 'GBL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nkangala Basketball League',
                'short_name' => 'NBL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ehlanzeni Basketball League',
                'short_name' => 'EBL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}