<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKycDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('statut');
            $table->timestamps();
            $table->string('chemin');
            $table->timestamp('date_creation');
            $table->timestamp('date_maj');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('kyc_type_id')->unsigned();
            $table->foreign('kyc_type_id')->references('id')->on('kyc_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kyc_documents');
    }
}
