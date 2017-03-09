<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->integer('quantidade')->unsigned();
            $table->datetime('data');
            $table->foreign('user_id')->references('id')->on('users');//adicionar on delete cascade no banco
            $table->foreign('produto_id')->references('id')->on('produtos');//adicionar on delete cascade no banco
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
        //
    }
}
