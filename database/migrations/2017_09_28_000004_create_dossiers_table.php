<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference')->unique();
            $table->string('token')->unique();
            $table->decimal('prix', 7, 2);
            $table->text("message")->nullable();
            $table->string("commentaire")->nullable();
            $table->timestamp('date_paiement')->nullable();
            $table->timestamp('date_telechargement')->nullable();
            $table->timestamp('date_dernier_rappel')->nullable();
            $table->timestamp('date_invalidite');
            $table->timestamp('date_creation')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_edition')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('entreprise_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('statut_dossier_id')->unsigned();

            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('statut_dossier_id')->references('id')->on('statuts_dossier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
