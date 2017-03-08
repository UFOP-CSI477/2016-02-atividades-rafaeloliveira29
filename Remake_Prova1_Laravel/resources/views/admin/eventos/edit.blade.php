@extends('layouts.app')

@section('content')

    <h1>Editar Evento: {{$evento->nome}}<h1>
    @if($errors->any())<!--Cria variavel de erros-->

<ul class="alert">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
    @endif
    {!! Form::model($evento,['route'=>['admin.eventos.update',$evento->id],'method'=>'put']) !!}<!--form binding usando $post antes de tudo pra recuperar os dados automaticamente-->

    @include('admin.eventos._form')
<div class="form-group">
    {!! Form::submit('Atualizar Evento',['class'=>'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@stop