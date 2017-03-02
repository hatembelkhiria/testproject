<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliverysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverys', function (Blueprint $table) {
            $table->increments('delivery_id');
            $table->string('item');
            $table->string('item_photo');
            $table->float('pickupLocationX');
            $table->float('pickupLocationY');
            $table->float('destinationX');
            $table->float('destinationY');
            $table->float('price');
            $table->integer('status');
            $table->string('marchandPhoto');
            $table->string('deliveryRequesterPhoto');
            $table->float('weight');
            $table->float('size');
            $table->integer('deliveryManId');
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
        Schema::dropIfExists('deliverys');
    }
}
