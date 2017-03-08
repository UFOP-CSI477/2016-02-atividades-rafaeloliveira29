@extends('layouts.app')

@section('content')



    <h1>Criar Novo Evento<h1>
    @if($errors->any())<!--Cria variavel de erros-->

<ul class="alert">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

    @endif
    
    {!! Form::open(['route'=>'admin.eventos.store','method'=>'post']) !!}

    
   @include('admin.eventos._form')
    <div class="w3-group"> 

    {!! Form::submit('Gravar Evento',['class'=>'btn btn-primary']) !!}
    </div>
    
    
    {!! Form::close() !!}
@stop