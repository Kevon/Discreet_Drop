<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipment_id')->unsigned();
            $table->string('stripe_charge_id')->nullable();
            $table->integer('stripe_amount')->unsigned()->nullable();
            $table->string('stripe_currency')->nullable();
            $table->string('stripe_balance_transaction')->nullable();
            $table->string('stripe_customer')->nullable();
            $table->string('stripe_failure_code')->nullable();
            $table->string('stripe_failure_message')->nullable();
            $table->string('stripe_receipt_email')->nullable();
            $table->string('stripe_receipt_number')->nullable();
            $table->string('stripe_source_id')->nullable();
            $table->string('stripe_source_brand')->nullable();
            $table->string('stripe_source_last4')->nullable();
            $table->string('stripe_status')->nullable();
            $table->integer('created_by')->unsigned();
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
        Schema::dropIfExists('charges');
    }
}
