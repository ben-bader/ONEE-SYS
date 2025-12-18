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
        Schema::create('peripheriques', function (Blueprint $table) {

            $table->id();

            $table->string('sous_famille');

            $table->string('designiation_article');

            $table->string('activite');

            $table->string('marque');

            $table->string('modele');

            $table->string('code_onee');

            $table->string('numero_serie')->unique();

            $table->string('nom_affectataire');
            $table->string('matricule_affectataire')->nullable();
            $table->foreign('matricule_affectataire')
                ->references('matricule')
                ->on('employes')
                ->onDelete('set null');
            $table->string('entite');
            $table->string('nom_adresse_site');
            $table->string('contrat_acquisition');
            $table->string('type');
            $table->string('num_contrat');
            $table->string('date_debut_contrat');
            $table->string('annee');
            $table->text('objet');
            $table->string('titulaire_marche');
            $table->text('obs');
            $table->string('etage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peripheriques');
    }
};
