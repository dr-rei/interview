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
        DB::unprepared('
            CREATE FUNCTION most_frequent_region()
            RETURNS VARCHAR(255)
            DETERMINISTIC
            BEGIN
                DECLARE result VARCHAR(255);
                SELECT CONCAT(region_id, " - ", COUNT(*)) INTO result
                FROM vehicles
                GROUP BY region_id
                ORDER BY COUNT(*) DESC
                LIMIT 1;
                RETURN result;
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
