<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estacionamento Icea Park</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
             .links > rafa {
                color: #636b6f;
                padding: 0 15px;
                font-size: 8px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    
    <body>
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Estacionamento Icea Park</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        
                    @endif
                </div>
            @endif

            <div class="content">
            @if(Auth::check())
            
                <div class="title m-b-md">
                    Bem Vindo <br>{{ Auth::user()->name }}<br>
                    Bom Trabalho<br>
                    <br>
                </div>
                    <div class="links">
                
                    <a href="/veiculos">Veiculos</a>
                    <a href="/relatorios">Relatórios</a>
                    <a href="{{ route('register') }}">Registrar Novo Funcionário</a>
                    <a href="{{Auth::logout()}}">Logout</a><br>
                    
          
            @else
                 <div class="title m-b-md">
                    <rafa>Bem Vindo ao Gereciador de Estacionamento</rafa><br>
                        <hr style="height:2px;"></hr>
                    <rafa>Faça Seu Login Para Iniciar a Jornada de Trabalho</rafa>
                    
                </div>
            @endif
          
          <footer class="container-fluid text-center">
<p>Atividade Final - Sistemas Web - ICEA - UFOP - Sistemas de Informação</p>
  <p>Rafael Souza Oliveira - 13.1.8411 / Michel Wagner Ferreira - #MatriculaMichel © Sistema De Estacionamento. Todos os direitos reservados.</p>
</footer>
       
    </body>

</html>
