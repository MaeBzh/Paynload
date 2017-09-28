<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_history', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');
            $table->integer('folder_id')->unsigned();
            $table->foreign('folder_id')->references('id')->on('folders');
            $table->integer('payment_status_id')->unsigned();
            $table->foreign('payment_status_id')->references('id')->on('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments_history');

    }
}
