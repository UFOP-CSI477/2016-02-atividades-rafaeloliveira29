@extends('layouts.app')

@section('content')

        <h1>Relatório Anual</h1>
        <table class="table  table-striped">
<h1>Todas das Entradas</h1>
        <thead>
           <tr>
           <th>Placa</th>
           <th>Tempo de Estadia</th> 
           <th>Operador Responsável</th> 
           <th>Entrada</th>
           <th>Saida</th>
           <th>Valor Pago</th>
           
    </thead>
    <tbody>
        @foreach($veiculos as $v)
<tr>    
        <td>{{$v->veiculo_placa}}</td>
       <td>{{ $v->tempo_estadia}} Minutos</td>
       <td>{{ $v->operador_responsavel}}</td>
       <td>{{$v->created_at}}</td>
       <td>{{ $v->updated_at}}</td>
       <td>R${{$v->valor_pago}}
       
  
@endforeach
</tr>
<td></td>   
<td></td>   
<td></td>   
<td></td>   
<td></td>   

        <td>Valor Total Pago : R${{$valortotal}}</td>
        
    </tbody>            
            </table>
                                                                     <a class="btn btn-primary" name="print" value="Imprimir" onClick="javascript:window.print()" >Imprimir Relatório</a>
            
                               <br><br> <a class="btn btn-primary" href="/relatorios">Voltar</a>

@endsection
