<!DOCTYPE html>
<html>
<title>PetShopPet_RSO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
<div class="w3-container">
<hr>
<h2 class="w3-center">PetShopPet</h2>
@if(Auth::check())

@endif
<div class="w3-bar w3-blue-grey">
@if (Auth::guest())
<!--Usuario nao esta logado-->
  <a href="/" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="/produtosall" class="w3-bar-item w3-button w3-padding-16">Produtos</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16">Carrinho de Compras</a>
  <a href="/auth/login" class="w3-bar-item w3-button w3-padding-16">Login</a>
  <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-16">Registrar</a><!--Registrar Cliente-->
  
  
@endif
  @if (Auth::check())
  @if(Auth::user()->usertype==2)
  Bem Vindo {{ Auth::user()->name }}, bom trabalho. <span class="caret"></span>
<!--Usuario Admin esta logado-->
   <a href="/" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="admin/produto/index" class="w3-bar-item w3-button w3-padding-16">Modificar/Inserir Produtos</a>
  <a href="/auth/register" class="w3-bar-item w3-button w3-padding-16">Registrar</a><!--Registrar Novo Funcionario-->
  <a href="{{Auth::logout()}}"  class="w3-bar-item w3-button w3-padding-16">Logout</a>

@endif
  @if (Auth::check())
   @if(Auth::user()->usertype==1)
   Bem Vindo {{ Auth::user()->name }}, boas Compras. <span class="caret"></span>
<!--Usuario Cliente esta logado-->
   <a href="/" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="/produtosall" class="w3-bar-item w3-button w3-padding-16">Produtos</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-16">Carrinho de Compras</a>
  <a href="{{Auth::logout()}}"  class="w3-bar-item w3-button w3-padding-16">Logout</a>
@endif

@endif
    @if (Auth::check())
  @if(Auth::user()->usertype==3)
  Bem Vindo {{ Auth::user()->name }}, bom trabalho. <span class="caret"></span>
<!--Usuario operador esta logado-->
   <a href="/" class="w3-bar-item w3-button w3-padding-16">Home</a>
  <a href="operador/produto/index" class="w3-bar-item w3-button w3-padding-16">Modificar Produtos</a>
  <a href="{{Auth::logout()}}"  class="w3-bar-item w3-button w3-padding-16">Logout</a>
@endif

@endif
@endif
  
  
  
  <div class="w3-dropdown-hover">
    
  </div>
</div>
  
<hr>
<!-- Side Navigation 
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none" id="mySidenav">
  <h1 class="w3-xxxlarge w3-text-teal">Side Navigation</h1>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-theme">Close <i class="fa fa-remove"></i></a>
  <a href="javascript:void(0)">Link 1</a>
  <a href="javascript:void(0)">Link 2</a>
  <a href="javascript:void(0)">Link 3</a>
  <a href="javascript:void(0)">Link 4</a>
  <a href="javascript:void(0)">Link 5</a>
</nav>

 Header 
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i> 
  <div class="w3-center">
  <h4>BEAUTIFUL RESPONSIVE WEB SITES</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">BUILT WITH W3.CSS</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
    </div>
  </div>
</header>

Modal 
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">×</span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:460px">
  <h4>Responsive</h4><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Built-in responsiveness</p>
  <p>Mobile first fluid grid</p>
  <p>Fits any screen sizes</p>
  <p>PC Tablet and Mobile</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:460px">
  <h4>Standard CSS</h4><br>
  <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Standard CSS only</p>
  <p>Easy to learn</p>
  <p>No need for jQuery</p>
  <p>No JavaScript library</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:460px">
  <h4>Design</h4><br>
  <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Paper like design</p>
  <p>Bold colors and shadows</p>
  <p>Equal across platforms</p>
  <p>Equal across devices</p>
  </div>
</div>
</div>

<div class="w3-container">
<hr>

-->




@yield('content')
<!--
<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>Tables</h2>
    <p w3-class="w3-large">Don't worry. W3.CSS takes care of your tables.</p>
    
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>First Name</th>
  <th>Last Name</th>
  <th>Points</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
</tr>
<tr class="w3-white">
  <td>Eve</td>
  <td>Jackson</td>
  <td>94</td>
</tr>
<tr>
  <td>Adam</td>
  <td>Johnson</td>
  <td>67</td>
</tr>
</tbody>
</table>
</div>

<hr>
-->
<!--
<h2 class="w3-center">Forms </h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4">

  <div class="w3-group">      
    <input class="w3-input" type="text" required>
    <label class="w3-label w3-validate">Name</label>
  </div>
  <div class="w3-group">      
    <input class="w3-input" type="text" required>
    <label class="w3-label w3-validate">Email</label>
  </div>
  <div class="w3-group">      
    <input class="w3-input" type="text" required>
    <label class="w3-label">Subject</label>
  </div>

  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label class="w3-validate">Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label class="w3-validate">Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label class="w3-validate">Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label class="w3-validate">Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label class="w3-validate">Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label class="w3-validate"> Don't know (Disabled)</label>
  </div>
  </div>
  
</form>
</div>

</div>
<hr>
-->





<!--
<h2 class="w3-center">Accordions</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-accordion-content">
  <div class="w3-container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 2</button>
<div id="Demo2" class="w3-accordion-content">
  <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 1</a>
  <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 2</a>
  <a class="w3-text-black w3-padding-16" href="javascript:void(0)">Link 3</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-hover-dark-grey w3-btn-block w3-left-align">Open Section 3</button>
<div id="Demo3" class="w3-accordion-content w3-black">
  <div class="w3-container">
    <p>Accordion with Images:</p>
    <img src="/w3images/fjords.jpg" style="width:30%;" class="w3-animate-zoom">
    <p>Trolltunga, Norway</p>
  </div>
</div>

<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city w3-animate-opacity">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>

<div id="Paris" class="w3-container city w3-animate-opacity">
  <h2>Paris</h2>
  <p>Paris is the capital of France.</p> 
  <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <h2>Tokyo</h2>
  <p>Tokyo is the capital of Japan.</p>
  <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
</div>
</div>
-->
<hr>
<!--Botoes
<h2 class="w3-center">Buttons</h2>
<div class="w3-center">
  <br>
  <a class="w3-btn">Button</a>
  <a class="w3-btn w3-theme">Button</a>
  <a class="w3-btn w3-disabled">Button</a>
  <br><br>
  <a class="w3-btn-floating w3-teal"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating w3-theme"><i class="fa fa-plus"></i></a>  
  <a class="w3-btn-floating w3-disabled"><i class="fa fa-plus"></i></a>
  <br><br>
  <a class="w3-btn-floating-large w3-teal"><i class="fa fa-plus"></i></a>
  <a class="w3-btn-floating-large w3-theme"><i class="fa fa-plus"></i></a>  
  <a class="w3-btn-floating-large w3-disabled"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
<div class="w3-dropdown-hover">
  <button class="w3-btn w3-theme w3-large">Dropdown <i class="fa fa-caret-down"></i></button>
  <div class="w3-dropdown-content w3-light-grey w3-grey w3-left-align">
    <a href="javascript:void(0)">Link 1</a>
    <a href="javascript:void(0)">Link 2</a>
    <a href="javascript:void(0)">Link 3</a>
  </div>
</div>
</div>

</div>
-->
<hr>

  <!-- Pagination 
  <div class="w3-center">
  <h2>Pagination</h2>
  <div class="w3-center w3-padding-jumbo">
    <div class="w3-bar">
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">«</a>
      <a class="w3-bar-item w3-button w3-theme w3-hover-theme" href="#">1</a>
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">2</a>
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">3</a>
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">4</a>
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">5</a>
      <a class="w3-bar-item w3-button w3-hover-theme" href="#">»</a>
    </div>
  </div>
</div>
<br>
-->


<!-- Footer -->
<footer class="w3-container w3-blue-grey">
  <h5>PETSHOP PET</h5>
  <p class="w3-opacity">O melhor lugar para o seu amigo!!</p>
  <p class="w3-opacity">Av. PEtshop, 22,Bairro PetShops, Cidade Pet!!</p>
  <p class="w3-opacity">Telefone: (55)22 3333-3322</p>
  
  
</footer>

<!-- Script for Sidenav, Tabs, Accordions, Progress bars and slideshows -->

</body>
</html> 


