@extends('layouts.app')

@section('content')



        <h1>Veiculos No Estacionamento</h1><br><h4> Dia: {{ date('d-M-Y ') }}</h4><h4>Hora: <iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="http://www.clocklink.com/html5embed.php?clock=004&timezone=BRST&color=black&size=120&Title=&Message=&Target=&From=2017,1,1,0,0,0&Color=black"></iframe>
</h4><br>
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
           <th> Editar Veiculo</th>
           <th> Gerar Recibo e Finalizar<th>
           

           
    </thead>
    <tbody>
        @foreach($veiculos as $v)
<tr>
@if($v->status==1)

       <td> <a href="/veiculos/{{ $v->id }}">{{ $v->veiculo_placa }}</a></td>
       <td>{{ $v->veiculo_modelo}}</td>
       <td>{{ $v->veiculo_tipo}}</td>
       <td>{{ $v->tempo_estadia}} Minutos</td>
       <td>{{ $v->operador_responsavel}}</td>
       <td>{{$v->created_at}}</td>
       <td><a href="/veiculos/{{ $v->id }}/edit" class="btn btn-primary"> Editar</a></td>
       <td><a href="/veiculos/finalizar/{{ $v->id }}" class="btn btn-primary"> Fechar Estadia</a></td>
@endif
    </tr>

    </tbody>            
        @endforeach
        
            </table>

@endsection
