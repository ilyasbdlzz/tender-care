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
        Schema::create('growthrecord', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iduser');
            $table->decimal('height', 5, 2);
            $table->decimal('weight', 5, 2);
            $table->date('date');
            $table->timestamps();

            $table->foreign('iduser')->references('iduser')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growthrecord');
    }
};
