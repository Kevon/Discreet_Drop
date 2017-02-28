<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipment_id')->unsigned();
            $table->integer('dd_info_id')->unsigned();
            $table->string('api_used')->nullable();
            $table->string('to_name')->nullable();
            $table->string('to_street1')->nullable();
            $table->string('to_street2')->nullable();
            $table->string('to_city')->nullable();
            $table->string('to_state')->nullable();
            $table->string('to_zip_code')->nullable();
            $table->string('to_phone')->nullable();
            $table->string('to_email')->nullable();
            $table->integer('box_id')->unsigned();
            $table->string('api_id')->nullable();
            $table->string('predefined_package')->nullable();
            $table->integer('weight_in_oz')->unsigned()->nullable();
            $table->string('label_url')->nullable();
            $table->string('rate_id')->nullable();
            $table->string('rate')->nullable();
            $table->string('carrier')->nullable();
            $table->string('service')->nullable();
            $table->string('delivery_days')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('status')->nullable();
            $table->string('tracker_id')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('tracking_url')->nullable();
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
        Schema::dropIfExists('outgoing_packages');
    }
}
