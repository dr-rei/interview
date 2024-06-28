<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            ["nopol" => "KB 9234 KT"],
            ["nopol" => "AA 3245 TYC"],
            ["nopol" => "KB 9133 RE"],
            ["nopol" => "B 9234 TU"],
            ["nopol" => "AD 9124 GH"],
            ["nopol" => "AD 9004 YGU"],
            ["nopol" => "B 9277 IOB"],
            ["nopol" => "AA 1143 BN"],
            ["nopol" => "B 9234 TU"]
        ];

        foreach ($vehicles as $vehicle) {
            $code = explode(' ', $vehicle['nopol'])[0];
            $region = \App\Models\Region::where('code', $code)->first();
    
            \App\Models\Vehicle::updateOrCreate(
                ['nopol' => $vehicle['nopol']],
                ['region_id' => $region->id]
            );
        }
    }
}
