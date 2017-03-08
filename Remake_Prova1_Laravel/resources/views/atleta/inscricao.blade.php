@extends('layouts.app')
@section('content')

<div align= 'center'>
<h1> Inscrição em Eventos Disponiveis</h1>

<table class="w3-table w3-striped w3-bordered" >
<tr class="w3-blue-grey" >
<th> Id</th>
<th>Nome</th>
<th>Preço</th>
<th>Data</th>

</tr>
@foreach($eventos as $evento)
<tr class="w3-teal">
<td>{{$evento->id}}</td>
<td>{{$evento->nome}}</td>
<td>{{$evento->preco}}</td>
<td>{{$evento->data}}</td>
<td ><a class="btn btn-primary" href= "" >Inscrição</a></td>
<a href="{{route('atleta.create')}}" class = "btn btn-success">Inscrição</a>
</tr>


@endforeach
</table>
</div>
@endsection
