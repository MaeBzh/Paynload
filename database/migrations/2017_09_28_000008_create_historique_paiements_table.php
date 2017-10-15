<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriquePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_paiements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date_paiement')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('dossier_id')->unsigned();
            $table->integer('statut_paiement_id')->unsigned();

            $table->foreign('dossier_id')->references('id')->on('folders');
            $table->foreign('statut_paiement_id')->references('id')->on('statuts_paiement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historique_paiements');

    }
}
