<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chemin');
            $table->string('md5');
            $table->string('taille');
            $table->string('extension');
            $table->timestamp('date_creation')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_edition')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('entreprise_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('dossier_id')->unsigned();
            $table->integer('type_document_id')->unsigned();

            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('dossier_id')->references('id')->on('dossiers');
            $table->foreign('type_document_id')->references('id')->on('types_document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
