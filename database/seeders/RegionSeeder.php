<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['code' => 'KB', 'name' => 'Kalimantan Barat'],
            ['code' => 'AA', 'name' => 'Temanggung'],
            ['code' => 'B', 'name' => 'Jakarta'],
            ['code' => 'AD', 'name' => 'Surakarta'],
        ];

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }
    }
}
