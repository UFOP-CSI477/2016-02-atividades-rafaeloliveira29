@extends('template')

@section('content')
   <a href="{{route('admin.produtos.create')}}" class = "btn btn-success">Criar Novo Produto</a>
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
    
   <td><a  href="{{ route('admin.produtos.edit',['id'=> $produto->id]) }}" class = "btn btn-default" >Edit <a/>   <br>
    <a href="{{ route('admin.produtos.destroy',['id'=> $produto->id]) }}"  class = "btn btn-danger">Delete <a/></td>
    
    
    </tr>
    @endforeach
    </table>
{!! $produtos->render() !!} <!--Paginacao-->


@stop