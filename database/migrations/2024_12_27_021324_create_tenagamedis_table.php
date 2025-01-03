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
        Schema::create('tenagamedis', function (Blueprint $table) {
            $table->id('idmedis')->primary();
            $table->string('iduser', 100);
            $table->string('spesialisasi', 100);
            $table->string('contact', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenagamedis');
    }
};
