<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSoal1 extends Controller
{
    function main(){
        $string = 'abcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwXabcdeFghijkLmnopqRstuvwX';
        $targetIndex = 1562231;

        // Hitung panjang string asli
        $originalLength = strlen($string);

        // Hitung berapa kali string perlu diulang untuk mencapai atau melebihi target index
        $repeatCount = ceil($targetIndex / $originalLength);

        // Buat string yang diulang
        $repeatedString = str_repeat($string, $repeatCount);

        // Tentukan nilai karakter pada index yang diinginkan
        if ($targetIndex <= strlen($repeatedString)) {
            $character = $repeatedString[$targetIndex - 1]; // -1 karena index PHP dimulai dari 0
            return response()->json(['character' => $character]);
        } else {
            return response()->json(['error' => 'Index out of range']);
        }
    }
}
