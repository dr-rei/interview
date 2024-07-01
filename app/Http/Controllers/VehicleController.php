<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function main()
{
    $vehicles = \App\Models\Vehicle::with('region')->get();
    //tampilkan json hanya berisikan nopol dan wilayah
    $data = array();
    $data['list'] = $vehicles->map(function ($vehicle) {
        return [
            'nopol' => $vehicle->nopol,
            'wilayah' => $vehicle->region->name
        ];
    })->all();
    

    // tampilkan data lokasi terbanyak menggunakan prcedure dan tambahkan pada array data
    $data['frequest_location'] = DB::select('CALL most_frequent_region()');
    

    return response()->json($data);
}
}
