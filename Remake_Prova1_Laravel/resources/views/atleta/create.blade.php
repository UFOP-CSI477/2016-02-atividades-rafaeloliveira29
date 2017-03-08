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
    
    {!! Form::open(['route'=>'atleta.store','method'=>'post']) !!}

    
   @include('admin.eventos._form')
    <div class="w3-group"> 

    {!! Form::submit('Gravar Inscrição,['class'=>'btn btn-primary']) !!}
    </div>
    
    
    {!! Form::close() !!}
@stop