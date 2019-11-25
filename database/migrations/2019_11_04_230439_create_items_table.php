<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->increments('id');
            //$table->string('barcode_id');
            $table->string('name');
            $table->decimal('buying_price', 5, 2);
            $table->decimal('selling_price', 5, 2);
            $table->integer('quantity');
            $table->string('category');
            $table->integer('minimum_no');
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
        Schema::dropIfExists('items');
    }
}
