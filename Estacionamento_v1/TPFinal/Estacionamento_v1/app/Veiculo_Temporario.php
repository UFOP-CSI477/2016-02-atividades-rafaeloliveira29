<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo_Temporario extends Model
{
    //
    protected $fillable = ['veiculo_placa', 'veiculo_modelo','operador_responsavel', 'veiculo_tipo', 'veiculo_entrada','valor_pago'];
        protected $table = 'veiculos_temp';

}
