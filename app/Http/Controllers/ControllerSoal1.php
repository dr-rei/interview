<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSoal1 extends Controller
{
    function main(){
        $loopingIndex = 'abcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwX';
        $targetIndex = 1562231;

        // Hitung panjang string asli
        $originalLength = strlen($loopingIndex);

        // Hitung sisa perulangan
        $count = $targetIndex % $originalLength;

        // ambil karakter dari looping index berdasarkan sisa perulangan
        $result = $loopingIndex[$count]; 

        // bila sisa perlulangan jumlahnya keliapatan 6 maka buat menjadi huruf besar
        if($count % 6 == 0){
            $result = strtoupper($result);
        }

        return response()->json([
            'result' => $result
        ]);



        

        
    }
}
