@extends('template')

@section('content')



    <h1>Criar Novo Produto<h1>
    @if($errors->any())<!--Cria variavel de erros-->

<ul class="alert">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

    @endif
    
    {!! Form::open(['route'=>'admin.produtos.store','method'=>'post']) !!}

    
   @include('admin.produtos._form')
    <div class="w3-group"> 

    {!! Form::submit('Gravar Produto',['class'=>'btn btn-primary']) !!}
    </div>
    
    
    {!! Form::close() !!}
@stop