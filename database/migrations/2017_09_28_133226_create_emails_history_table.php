<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails_history', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');
            $table->timestamps();
            $table->string('expediteur');
            $table->string('destinataire');
            $table->string('destinataire_complementaire');
            $table->string('piece_jointe');
            $table->text('message');
            $table->integer('email_type_id')->unsigned();
            $table->foreign('email_type_id')->references('id')->on('email_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails_history');
    }
}
