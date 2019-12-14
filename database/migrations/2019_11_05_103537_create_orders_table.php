<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('item_id');
            $table->integer('pic_id')->unsigned();
            $table->decimal('price', 5, 2);
            $table->integer('quantity');
            $table->string('status');
            $table->timestamps();
            // $table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade');
            // $table->foreign('pic_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
