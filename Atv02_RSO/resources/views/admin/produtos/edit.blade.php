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
    {!! Form::model($produto,['route'=>['admin.produtos.update',$produto->id],'method'=>'put']) !!}<!--form binding usando $post antes de tudo pra recuperar os dados automaticamente-->

    @include('admin.produtos._form')
<div class="form-group">
    {!! Form::submit('Atualizar Produto',['class'=>'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@stop