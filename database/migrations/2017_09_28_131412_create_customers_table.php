<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('raison_sociale')->nullable();
            $table->string('adresse_rue');
            $table->string('adresse_cp');
            $table->string('adresse_ville');
            $table->string('telephone');
            $table->string('siret')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('customers');
    }
}
