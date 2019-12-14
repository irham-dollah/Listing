<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale__items', function (Blueprint $table) {
        $table->increments('id');
        $table->bigInteger('sale_id')->unsigned();
        $table->bigInteger('item_id')->unsigned();
        $table->integer('quantity');
        $table->decimal('subtotal',10,2);
        $table->timestamps(); });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale__items');
    }
}

// class CreateSaleItemsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//             Schema::create('sale-item', function (Blueprint $table) {
//             $table->increments('id');
//             $table->bigInteger('sale_id')->unsigned();
//             $table->bigInteger('item_id')->unsigned();
//             $table->integer('quantity');
//             $table->decimal('subtotal',10,2);
//             $table->timestamps();
//             // $table->foreign('sale_id')
//             //     ->references('id')
//             //     ->on('sales')
//             //     ->onUpdate('cascade')
//             //     ->onDelete('cascade');
//             // $table->foreign('item_id')
//             //     ->references('id')
//             //     ->on('items')
//             //     ->onUpdate('cascade')
//             //     ->onDelete('cascade');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('sale__items');
//     }
// }

