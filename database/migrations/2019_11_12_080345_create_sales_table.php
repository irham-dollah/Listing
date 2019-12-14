<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedBigInteger('item_id');
            $table->integer('seller_id')->unsigned();
            // $table->decimal('price', 5, 2);
            // $table->integer('quantity');           
            $table->decimal('total_price', 10, 2);
            $table->date('date');
            $table->timestamps();
            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
