<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prix');
            $table->timestamp('date_creation');
            $table->timestamp('date_paiement');
            $table->timestamp('date_telechargement');
            $table->timestamp('date_dernier_rappel')->nullable();
            $table->timestamp('date_invalidite');
            $table->timestamps();
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('folder_status_id')->unsigned();
            $table->foreign('folder_status_id')->references('id')->on('folder_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
