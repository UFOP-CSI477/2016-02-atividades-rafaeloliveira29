@extends('layouts.app')

@section('content')

      <h1>Editar Veiculo</h1>

      <form method="post" action="/veiculos/{{ $veiculo->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Placa: <input type="text" name="veiculo_placa" value="{{ $veiculo->veiculo_placa }}" /><br>
        Modelo: <input type="text" name="veiculo_modelo" value="{{ $veiculo->veiculo_modelo }}" /><br>
        Tipo: <input type="text" name="veiculo_tipo" value="{{ $veiculo->veiculo_tipo }}" /><br>
        Hora de Chegada: <input type="datetime-local" name="created_at" value="{{ $veiculo->created_at }}" /><br>
        Hora de Saida: <input type="datetime-local" name="updated_at" value="{{ $veiculo->updated_at }}" /><br>
        Tempo de Estadia: <input type="text" name="tempo_estadia" value="{{ $veiculo->tempo_estadia }}" /><br>
        Operador Responsável: <input type="text" name="operador_responsavel" value="{{ $veiculo->operador_responsavel }}" /><br>
        Valor Pago: <input type="text" name="valor_pago" value="{{ $veiculo->valor_pago }}" /><br>
        
        
                
        
        

        <input class="btn btn-primary" type="submit" value="Salvar"/>
        <a href="/veiculos" class="btn btn-primary" >Voltar</a> 

      </form>

@endsection
