<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('logo/LOGO.PNG') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')

    <header>
            

        <div class="ancho">

           <div class="logo">
            
            <a href=""><img src="logo/eco.png" alt=""></a>

            </div>

      <div class="buscar">
        
        <input type="text" placeholder="Busca aqui tus productos">
        <i class="icon-search"></i>

      </div>



     <nav>

        <ul>

          <li><a href=""><span class="icon-user"></span> Login</a></li>
          <li><a href=""><span class="icon-location"></span> Caucasia</a></li>
          <li><a href=""><span class="icon-basket"></span> Carrito</a></li>

        </ul>

      </nav>
    </div>

</header>


<div class="contenedor">

  <ul class="slider">

      <li id="slider1"><img src="logo/slider1.png" alt=""></li>
      <li id="slider2"><img src="logo/slider2.png" alt=""></li>
      <li id="slider3"><img src="logo/slider3.png" alt=""></li>


  </ul>





<div class="targeta">

  <a href="#">

    <div class="img-contenedor">

      <img src="logo/aceta.jpg" alt="acetaminofen">
      <span class="promo">50% de descuento</span>
  
    </div>

  </a>
   <div class="info-contenedor">
    <h3>acetaminofen</h3>
    <strong>$5.000</strong>
    <a href="#" class="add-cart">añadir al carrito</a>
  </div>

</div>




<div class="targeta">

  <a href="#">

    <div class="img-contenedor">

      <img src="logo/aceta.jpg" alt="acetaminofen">
      <span class="promo">50% de descuento</span>
  
    </div>

  </a>
      <div class="info-contenedor">
         <h3>acetaminofen</h3>
         <strong>$5.000</strong>
         <a href="#" class="add-cart">añadir al carrito</a>
      </div>

</div>


<div class="targeta">

  <a href="#">

    <div class="img-contenedor">

      <img src="logo/aceta.jpg" alt="acetaminofen">
      <span class="promo">50% de descuento</span>
  
    </div>

  </a>
      <div class="info-contenedor">
         <h3>acetaminofen</h3>
         <strong>$5.000</strong>
         <a href="#" class="add-cart">añadir al carrito</a>
      </div>

</div>







</body>
</html>
