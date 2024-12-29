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
        Schema::create('counseling_tabel', function (Blueprint $table) {
            $table->id('idcounseling');
            $table->foreignId('iduser');
            $table->foreignId('idmedis');
            $table->enum('Status', ['Pending', 'Approved', 'Rejected']);
            $table->date('Date');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counseling_tabel');
    }
};
