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
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entreprise_id')->constrained()->onDelete('cascade');
            $table->string('titre');
            $table->text('description');
            $table->string('competences_requises');
            $table->enum('type_contrat', ['distance', 'hybride', 'temps_plein']);
            $table->string('emplacement');
            $table->unsignedBigInteger('nombre_visites')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('offre_emplois');
        Schema::table('offre_emplois', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
