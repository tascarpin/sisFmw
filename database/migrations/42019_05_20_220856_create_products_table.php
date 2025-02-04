<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->
                increments('id');
            $table->
                integer('category_id')->unsigned();
            $table->
                foreign('category_id')->
                references('id')->on('categories');
            $table->
                string('nome', 42);
            $table->
                integer('estoqueMaximo');
            $table->
                integer('estoqueMinimo');
            $table->
                float('precoCompra',8,2);
            $table->
                float('precoVenda',8,2);
            $table->
                enum('status', array('ATIVO', 'INATIVO'));
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
        Schema::dropIfExists('products');
    }
}
