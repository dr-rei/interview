<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function main()
{
    $vehicles = \App\Models\Vehicle::with('region')->get();
    //tampilkan json hanya berisikan nopol dan wilayah
    return response()->json($vehicles->map(function ($vehicle) {
        return [
            'nopol' => $vehicle->nopol,
            'wilayah' => $vehicle->region->name
        ];
    }));
}
}
