<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raison_sociale');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->boolean('est_bloque')->default(false);
            $table->rememberToken();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse_rue');
            $table->string('adresse_cp');
            $table->string('adresse_ville');
            $table->string('telephone');
            $table->string('siret');
            $table->string('tva_intra')->nullable();
            $table->timestamp('date_creation')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_edition')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
