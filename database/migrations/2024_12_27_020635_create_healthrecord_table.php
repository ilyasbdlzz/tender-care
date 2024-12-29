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
        Schema::create('healthrecord', function (Blueprint $table) {
            $table->id('iduser');
            $table->foreignId('iduser');
            $table->text('drug');
            $table->text('allergy');
            $table->date('Date');
            $table->timestamps();

            $table->foreign('iduser')->references('iduser')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthrecord');
    }
};
