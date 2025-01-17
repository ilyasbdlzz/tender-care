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

        // Migrasi untuk tabel growthrecord
        Schema::create('growthrecord', function (Blueprint $table) {
            $table->id(); // ID untuk growthrecord
            $table->string('iduser'); // Pastikan ini sesuai dengan tipe data di tabel users
            $table->decimal('height', 5, 2);
            $table->decimal('weight', 5, 2);
            $table->date('date');
            $table->timestamps();
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
