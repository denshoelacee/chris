<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiderInfoTable extends Migration
{
    public function up()
    {
        Schema::create('rider_info', function (Blueprint $table) {
            $table->id('rider_info_id');
            $table->string('vehicle_brand');
            $table->string('vehicle_type');
            $table->string('vehicle_model');
            $table->unsignedBigInteger('user_id'); // Reference to users.user_id
            $table->timestamps();

            // Foreign key constraint
            //$table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rider_info');
    }
}
