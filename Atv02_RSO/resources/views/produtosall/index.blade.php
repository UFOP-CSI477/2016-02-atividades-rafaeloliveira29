@extends('template')

@section('content')

<div align= 'center'>
<h1> Produtos Disponiveis</h1>

<table class="w3-table w3-striped w3-bordered" >
<tr class="w3-blue-grey" >
<th> Id</th>
<th>Nome</th>
<th>Preço</th>
<th>Imagem</th>
<th>Adicionado Em</th>
<th>Atualizado Em</th>
<th>Adicionar ao Carrinho</th>
</tr>
@foreach($produtosall as $produto)
<tr class="w3-teal">
<td>{{$produto->id}}</td>
<td>{{$produto->nome}}</td>
<td>{{$produto->preco}}</td>
<td>{{$produto->imagem}}</td>
<td>({{$produto->created_at}})</td>
<td>({{$produto->updated_at}})</td>
  @if (Auth::guest())
<td ><a class="btn btn-primary" href= "/auth/login" >Comprar</a></td>
@endif
@if (Auth::check())
@if(Auth::user()->usertype==1)
<td ><a class="btn btn-primary"  href= "/comprar" >Comprar</a></td>

@endif
@endif
</tr>
@endforeach
</table>
</div>

@stop