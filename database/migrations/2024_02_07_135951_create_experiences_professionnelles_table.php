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
        Schema::create('experiences_professionnelles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_id')->constrained()->onDelete('cascade');
            $table->string('poste');
            $table->string('entreprise');
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences_professionnelles');
    }
};
