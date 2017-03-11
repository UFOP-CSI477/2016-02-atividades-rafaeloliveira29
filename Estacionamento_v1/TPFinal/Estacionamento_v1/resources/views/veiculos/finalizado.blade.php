<html>
<head>
 <meta charset="utf-8">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>
    
    <div align='center'>
    <h1> Recibo de Saida</h1>
    <h2>ICEA PARK</h2>
    <h4>Rua dos Estacionamentos, 444, João MonlevadeFicticia, Minas Gerais</h4>
    <h4>Telefone:(+55)31 3852-0000</h4>
    </div>
</head>
<body border='3px'>
<div align='left'>
<table class= "table " >
<thead class="thead-inverse">
<tr> <h1>Dados do Veiculo</h1></tr>
</thead>
<tbody>
<td>Placa =><td>    
<td>{{ $veiculo->veiculo_placa }}</td>
</tr>
<tr>
<td>Modelo=></td>
<td>{{ $veiculo->veiculo_modelo}}</td>
</tr>
<tr>
<td>Tipo=></td>
<td>{{ $veiculo->veiculo_tipo}}</td>
</tr>
<tr>
<td>Tempo de Estadia=></td>
<td>{{ $veiculo->tempo_estadia}} Minutos</td>
</tr>
<tr>
<td>Operador Responsável Pelas Manobras=></td>
<td>{{ $veiculo->operador_responsavel}}</td>
</tr>
<tr>
<td>Dia/Hora de Entrada=></td>
<td>{{$veiculo->created_at}}</td>
</tr>
<tr>
<td>Dia/Hora de Saida=></td>
<td>{{ $veiculo->updated_at}}</td>
</tr>
<tr>
<td>Valor Final=></td>
<td>R${{ $veiculo->valor_pago}}</td>
</tr>
</tbody>
</table>
       <a href="/veiculos" class="btn btn-primary">Finalizar Veiculo e Voltar</a><br><br>
        <a class="btn btn-primary" value="Refresh Page" onClick="window.location.reload()">Clique para Valor Final</a><br><br>
     <a class="btn btn-primary" name="print" value="Imprimir" onClick="javascript:window.print()" >Imprimir Recibo</a>
        </div>
</body>
</html>

