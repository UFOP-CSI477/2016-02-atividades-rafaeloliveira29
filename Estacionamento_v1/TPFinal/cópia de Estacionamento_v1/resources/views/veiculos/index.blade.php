@extends('layouts.app')

@section('content')

        <h1>Veiculos No Estacionamento</h1>
        <a href="/veiculos/create" class = "btn btn-primary">Inserir</a>
        <table class="table  table-striped">

        <thead>
           <tr>
           <th>Placa</th> 
           <th>Modelo</th> 
           <th>Tipo</th> 
           <th>Tempo de Estadia</th> 
           <th>Operador Responsável</th> 
           <th>Entrada</th>
           <th>Saida</th>
           <th>Valor Pago</th> 
           <th> Editar Veiculo</th>
           <th> Finalizar Veiculo<th>
           

           
    </thead>
    <tbody>
        @foreach($veiculos as $v)
<tr>
       <td> <a href="/veiculos/{{ $v->id }}">{{ $v->veiculo_placa }}</a></td>
       <td>{{ $v->veiculo_modelo}}</td>
       <td>{{ $v->veiculo_tipo}}</td>
       <td>{{ $v->tempo_estadia}} Minutos</td>
       <td>{{ $v->operador_responsavel}}</td>
       <td>{{$v->created_at}}</td>
       <td>{{ $v->updated_at}}</td>
       <td>R${{ $v->valor_pago}}</td>
       <td><a href="/veiculos/{{ $v->id }}/edit" class="btn btn-primary"> editar</a></td>
       <td><a href="/veiculos/finalizar/{{ $v->id }}" class="btn btn-primary"> finalizar</a></td>

    </tr>

    </tbody>            
        @endforeach
        
            </table>

@endsection
