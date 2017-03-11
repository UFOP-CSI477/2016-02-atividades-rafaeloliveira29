<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo_Permanente extends Model
{
    //
        protected $fillable = ['veiculo_placa', 'veiculo_modelo', 'veiculo_tipo', 'veiculo_entrada','veiculo_saida','tempo_estadia','operador_responsavel','valor_pago','updated_at','created_at'];

    protected $table = 'veiculos_rel';
}
