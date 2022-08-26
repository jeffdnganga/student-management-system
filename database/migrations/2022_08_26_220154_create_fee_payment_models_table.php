<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeePaymentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_payment_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('Student_id');
            $table->integer('Term_fees');
            $table->integer('Amount_paid');
            $table->integer('Fee_balance')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_payment_models');
    }
}
