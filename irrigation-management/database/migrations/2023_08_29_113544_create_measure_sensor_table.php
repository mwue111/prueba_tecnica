<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('measure_sensor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('measure_id');
            $table->unsignedBigInteger('sensor_id');
            $table->timestamps();

            $table->foreign('measure_id')->references('id')->on('measures');
            $table->foreign('sensor_id')->references('id')->on('sensors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_sensor');
    }
};
