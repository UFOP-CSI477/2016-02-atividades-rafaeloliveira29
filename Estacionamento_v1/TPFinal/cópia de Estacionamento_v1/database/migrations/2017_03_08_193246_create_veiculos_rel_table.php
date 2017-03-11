<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('veiculos_rel', function (Blueprint $table) {
            $table->increments('veiculo_id');
            $table->datetime('veiculo_chegada');//Created_At = Entrada // Updated_At= Saida
            $table->datetime('veiculo_saida');//deve permitir valores nulos em funçao dessa variavel 
                                        //ser atualizada na saida do carro, ou seja, na chegada ela será nula' Isso foi modificado direto no banco
            $table->decimal('tempo_estadia');
            $table->string('operador_responsavel');
            $table->decimal('valor_pago');//é atualizado quando a saida é feita, deve permitir valores nulos em funçao dessa variavel 
                                        //ser atualizada na saida do carro, ou seja, na chegada ela será nula' Isso foi modificado direto no banco
           
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
