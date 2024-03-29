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
        Schema::create('offre_emploi_candidatures', function (Blueprint $table) {

            $table->primary(['offre_emploi_id', 'candidature_id']);

            $table->foreignId('offre_emploi_id')->constrained()->onDelete('cascade');
            $table->foreignId('candidature_id')->constrained()->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('offre_emploi_candidature');

    }
};
