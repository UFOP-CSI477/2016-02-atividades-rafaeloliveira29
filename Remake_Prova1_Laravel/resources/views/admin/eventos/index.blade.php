@extends('layouts.app')

@section('content')



   <a href="{{route('admin.eventos.create')}}" class = "btn btn-success">Criar Novo Evento</a>
    <br>
    <br>
    <table class="table table-bordered">
    <tr class="w3-blue-grey">
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Data</th>
    <th>Ação</th>
    
    </tr>
@foreach($eventos as $evento)
    <tr>
    <td>{{$evento->id}}</td>
    <td>{{$evento->nome}}</td>
    <td>{{$evento->preco}}</td>
    <td>{{$evento->data}}</td>
    
   <td><a  href="{{ route('admin.eventos.edit',['id'=> $evento->id]) }}" class = "btn btn-default" >Edit <a/>   <br>
    <a href="{{ route('admin.eventos.destroy',['id'=> $evento->id]) }}"  class = "btn btn-danger">Delete <a/></td>
    
    
    </tr>
    @endforeach
    </table>
{!! $eventos->render() !!} <!--Paginacao-->


@stop