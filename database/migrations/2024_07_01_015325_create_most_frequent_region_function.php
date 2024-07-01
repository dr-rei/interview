<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // membuat procedure untuk menampilkan wilayah paling banyak muncul
        DB::unprepared('DROP PROCEDURE IF EXISTS most_frequent_region');
        DB::unprepared('
        CREATE PROCEDURE most_frequent_region()
        DETERMINISTIC
        BEGIN
            DECLARE result VARCHAR(255);
            SELECT CONCAT(region_id, " - ", regions.name) INTO result
            FROM vehicles
            LEFT JOIN regions ON vehicles.region_id = regions.id
            GROUP BY region_id
            ORDER BY COUNT(*) DESC
            LIMIT 1;
            SELECT result;
        END
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP FUNCTION IF EXISTS most_frequent_region');
    }
};
