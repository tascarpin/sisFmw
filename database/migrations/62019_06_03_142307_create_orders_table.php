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
            $table->
                increments('id');
            $table->
                integer('client_id')->unsigned();
            $table->
                foreign('client_id')->references('id')->on('users');
            $table->
                decimal('total');
            $table->
                smallInteger('status')->dafault(0);
            $table->
                timestamps();
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
