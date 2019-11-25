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
            $table->unsignedBigInteger('item_id');
            $table->integer('seller_id')->unsigned();
            $table->decimal('price', 5, 2);
            $table->integer('quantity');           
            $table->timestamps();

            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            // $table->foreign('seller')->references('name')->on('users');
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
