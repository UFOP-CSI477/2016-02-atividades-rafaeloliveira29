@extends('template')

@section('content')

<div >
<h1>Conteudo Do Carrinho de Compras</h1>
@foreach($carrinho as $c)
<h2>{{$c}}</h2>

@endforeach

<a class="btn btn-primary" href="/produtosall">Voltar</a>
</div>
@endsection