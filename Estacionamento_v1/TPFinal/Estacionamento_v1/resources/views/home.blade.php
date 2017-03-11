@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tela Inicial</div>

                <div class="panel-body">
                    You are logged in!
                    <script language="JavaScript"> 
window.location="/"; 
</script> 

<noscript> 
Se não for direcionado automaticamente, clique <a href="/">aqui</a>. 
</noscript>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
