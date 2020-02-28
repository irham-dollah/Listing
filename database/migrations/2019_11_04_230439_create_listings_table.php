<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list_name',80);
            $table->string('address', 255);
            $table->float('latitude', 5, 2);
            $table->float('longitude', 5, 2);
            $table->integer('submitter_id')->unsigned();
            $table->timestamps();

            $table->foreign('submitter_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
