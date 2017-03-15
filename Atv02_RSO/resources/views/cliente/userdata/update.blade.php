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
    {!! Form::model($post,['route'=>['cliente.userdata.update',$user->id],'method'=>'put']) !!}<!--form binding usando $post antes de tudo pra recuperar os dados automaticamente-->

    @include('cliente.userdata._form')
<div class="form-group">
    {!! Form::submit('Update usuario',['class'=>'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@stop