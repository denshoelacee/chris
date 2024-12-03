<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->date('order_date');
            $table->integer('quantity_order');
            $table->unsignedBigInteger('inventory_id');
            $table->timestamps();

            // Foreign key constraints
            //$table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('product_id')->references('product_id')->on('inventory')->onDelete('cascade');
            //$table->foreign('inventory_id')->references('product_id')->on('inventory')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
