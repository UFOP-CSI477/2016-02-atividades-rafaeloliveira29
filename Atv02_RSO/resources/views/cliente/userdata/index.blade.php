@extends('template')

@section('content')
    <br>
    <br>
    <table class="w3-table w3-striped w3-bordered">
    <tr class="w3-blue-grey">
    <th>Id</th>
    <th>Nome</th>
    <th>email</th>
    <th>senha</th>
    
    </tr>
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    
   <td><a  href="{{ route('cliente.userdata.edit',['id'=> $user->id]) }}" class = "btn btn-default" >Edit <a/>   <br>
    
    
    </tr>
    </table>


@stop