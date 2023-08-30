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
        Schema::create('irrigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->enum('model', ['A', 'B', 'C']);
            $table->string('serial_number')->unique();
            $table->date('registration_date'); //fecha de alta
            $table->date('last_connection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irrigations');
    }
};
