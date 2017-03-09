@extends('template')

@section('content')



    <br>
    <br>
    <table class="w3-table w3-striped w3-bordered">
    <tr class="w3-blue-grey">
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Imagem</th>
    <th>Ação</th>
    
    </tr>
@foreach($produtos as $produto)
    <tr>
    <td>{{$produto->id}}</td>
    <td>{{$produto->nome}}</td>
    <td>{{$produto->preco}}</td>
    <td>{{$produto->imagem}}</td>
    
   <td><a  href="{{ route('operador.produtos.edit',['id'=> $produto->id]) }}" class = "btn btn-default" >Edit <a/>   <br>
    
    
    </tr>
    @endforeach
    </table>
{!! $produtos->render() !!} <!--Paginacao-->

@stop