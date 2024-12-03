<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id('shipment_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('user_id');
            $table->date('shipment_date');
            $table->date('est_arr_date')->nullable();
            $table->date('act_arr_date')->nullable();
            $table->timestamps();

            // Foreign key constraints
            //$table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            //$table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
