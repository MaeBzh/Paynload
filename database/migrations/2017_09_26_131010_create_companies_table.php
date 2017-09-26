<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raison_sociale');
            $table->string('adresse_rue');
            $table->string('adresse_cp');
            $table->string('adresse_ville');
            $table->string('siret');
            $table->string('tva_intra')->nullable();
            $table->string('telephone');
            $table->string('nom_dirigeant');
            $table->string('prenom_dirigeant');
            $table->string('civilite_dirigeant');
            $table->string('etat_compte');
            $table->timestamp('date_creation');
            $table->timestamp('date_derniere_edition');
            $table->timestamp('date_derniere_connexion');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
