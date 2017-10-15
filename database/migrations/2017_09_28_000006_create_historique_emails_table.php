<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('expediteur');
            $table->string('destinataire');
            $table->string('destinataires_complementaires');
            $table->string('piece_jointe');
            $table->string('objet');
            $table->text('message');
            $table->timestamp('date_envoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('type_email_id')->unsigned();

            $table->foreign('type_email_id')->references('id')->on('types_email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historique_emails');
    }
}
