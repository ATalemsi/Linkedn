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
        Schema::create('cursus_educatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_id')->constrained()->onDelete('cascade');
            $table->string('diplome');
            $table->string('etablissement');
            $table->date('date_obtention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursus_educatifs');
    }
};
