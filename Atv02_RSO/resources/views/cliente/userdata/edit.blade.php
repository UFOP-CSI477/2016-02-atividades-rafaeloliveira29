@extends('template')

@section('content')



    <h1>Editar Usuario: {{$user->nome}}<h1>
    @if($errors->any())<!--Cria variavel de erros-->

<ul class="alert">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

    @endif
    {!! Form::model($user,['route'=>['cliente.userdata.update',$user->id],'method'=>'put']) !!}<!--form binding usando $post antes de tudo pra recuperar os dados automaticamente-->

    @include('cliente.userdata._form')
<div class="form-group">
    {!! Form::submit('Atualizar Usuario',['class'=>'btn btn-primary']) !!}
    <a class="btn btn-primary" href="/"> Voltar</a>
    </div>
    
    {!! Form::close() !!}
@stop