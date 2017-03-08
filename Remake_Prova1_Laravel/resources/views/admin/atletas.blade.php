@extends('layouts.app')

@section('content')



    <br>
    <br>
    <table class="table table-bordered">
    <tr class="w3-blue-grey">
    <th>ID</th>
    <th>Nome</th>
    </tr>
    
@foreach($atletas as $atleta)

    <tr>
    <td>{{$atleta->id}}</td>
    <td>{{$atleta->nome}}</td>
    
    
 
    
    
    </tr>
    @endforeach
    </table>


@stop