@extends('layouts.app')

@section('content')



    <br>
    <br>
    <table class="table table-bordered">
    <tr class="w3-blue-grey">
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Data</th>
    <th>pago?</th>
    
    
    </tr>
@foreach($registros as $registro)
    <tr>
    <td>{{$registro->id}}</td>
    <td>{{$registro->atleta_id}}</td>
    <td>{{$registro->evento_id}}</td>
    <td>{{$registro->data}}</td>
    <td>{{$registro->pago}}</td>
    
    
    
    
    </tr>
    @endforeach
    </table>


@stop