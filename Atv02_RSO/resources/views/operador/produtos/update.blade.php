@extends('template')

@section('content')



    <h1>Editar Produto: {{$produto->nome}}<h1>
    @if($errors->any())<!--Cria variavel de erros-->

<ul class="alert">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

    @endif
    {!! Form::model($post,['route'=>['operador.produtos.update',$produto->id],'method'=>'put']) !!}<!--form binding usando $post antes de tudo pra recuperar os dados automaticamente-->

<div class="w3-group"> 
    
    {!! Form::label('preco','Preço do Produto:') !!}
    {!! Form::text('preco',null,['class'=>'form-control']) !!}
    </div>
</div>
    <div class="w3-container w3-card-2">
<div class="w3-group"> 
    
    {!! Form::label('imagem','Imagem:') !!}
    {!! Form::text('imagem',null,['class'=>'form-control']) !!}
    </div>
<div class="form-group">
    {!! Form::submit('Update Produto',['class'=>'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@stop