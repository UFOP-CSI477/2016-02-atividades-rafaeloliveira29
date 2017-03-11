@extends('layouts.app')

@section('content')

        <h1>Inserir Veiculo</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="post" action="/veiculos">

          {{ csrf_field() }}
          <div class="form-group">
          <label for="placa">Placa:</label>
          <input type="text" name="veiculo_placa">
          </div>

           <div class="form-group">
          <label for="modelo">Modelo:</label>
          <input type="text" name="veiculo_modelo">
          </div>

          <div class="form-group">
          <label for="tipo">Tipo:</label>
          <input type="text" name="veiculo_tipo">
          </div>
          
          
          <div class="form-group">
          <label for="entrada">Data/Hora Entrada:</label>
          <input type="datetime" name="created_at" value="{{ date('d-m-Y H:i:s') }}" readonly></input>
          </div>
          
          <div class="form-group">
          <label for="operador"> Operador Responsável:</label>
         @if(Auth::check())
          <input type="text" name="operador_responsavel" value="{{Auth::user()->name}}" readonly></input>
          @endif
          </div>
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/veiculos" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
