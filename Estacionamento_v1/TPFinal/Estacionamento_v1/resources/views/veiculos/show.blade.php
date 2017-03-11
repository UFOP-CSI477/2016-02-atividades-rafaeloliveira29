@extends('layouts.app')

@section('content')

      <h1>Exibir Veiculo</h1>

      <form method="post" action="/veiculos/{{ $veiculo->id }}">


        {{ csrf_field() }}

        Placa:  {{ $veiculo->veiculo_placa}}<br>
        Modelo:  {{ $veiculo->veiculo_modelo}}<br>
        Tipo:  {{ $veiculo->veiculo_tipo}}<br>
        Hora de Chegada:  {{ $veiculo->created_at}}<br>
        Hora de Saida:  {{ $veiculo->updated_at}}<br>
        Tempo de Estadia:  {{ $veiculo->tempo_estadia }}<br>
        Operador Responsável: {{ $veiculo->operador_responsavel }}<br>
        Valor Pago: {{ $veiculo->valor_pago }}<br>

<br>    
        
        <!--<button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>-->
        <a href="/veiculos" class="btn btn-primary" >Voltar</a> 
              
          
      </form>

@endsection
