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
        Schema::create('counseling', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('iduser'); // Foreign key to User table
            $table->string('idtenagamedis'); // Foreign key to MedicalProfessional table
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending'); // Status field with default value
            $table->date('date'); // Counseling date
            $table->time('clock'); // Counseling date
            $table->timestamps(); // Created_at and Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counseling');
    }
};
