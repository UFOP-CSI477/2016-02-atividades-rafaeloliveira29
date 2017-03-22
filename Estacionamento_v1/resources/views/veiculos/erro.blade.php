@extends('layouts.app')

@section('content')





<div align="center">
<h2>Voce não informou os dados do veiculo corretamente!</h2><br><br>
<h3>{{$erro}}</h3>
<br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br>
<a href="/veiculos/create" class="btn btn-primary"> Voltar</a>
<br><br> <br><br> <br>
</div>

@endsection