<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->
                increments('id');
            $table->
                integer('user_id')->unsigned();
            $table->
                foreign('user_id')->
                references('id')->on('users');
            $table->
                string('telefone');
            $table->
                text('endereco');
            $table->
                string('cidade');
            $table->
                string('estado');
            $table->
                string('cep');
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
        Schema::dropIfExists('clients');
    }
}
