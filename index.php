<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Francisco Jesús Marfil Vargas" />

  <title>Skoob Doog</title>

  <!--Importamos la librería font-awesome (contiene fuentes e iconos que utilizaremos)-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

  <link rel="stylesheet" href="styles/style.css" />

  <!-- TODO: Eliminar estos enlaces -->
  <!--
      <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
-->

  <?php
  // Conectar a la base de datos
  require("php/connect-to-database.php");
  ?>
</head>

<body>
  <!--Header-->
  <?php include "header.php"; ?>

  <!--REVIEW: No hay ofertas actualmente. ¿Se van a implementar?-->
  <!--Hero-->
  <section id="hero">
    <h4>¡Nuevas ofertas!</h4>
    <h2>Super ofertas</h2>
    <h1>En muchos de nuestros libros</h1>
    <p>Ahorra hasta un 50%</p>
    <a href="shop.php"><button>Ir a la tienda</button></a>

  </section>

  <!--Características-->
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="images/update/features/fast-delivery.png" alt="" />
      <h6>Envíos rápidos</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/best-prices.png" alt="" />
      <h6>Mejores precios</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/books.png" alt="" />
      <h6>Gran variedad de libros</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/assistance.png" alt="" />
      <h6>Asistencia</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/secure-payment.png" alt="" />
      <h6>Pago seguro</h6>
    </div>
  </section>

  <!--Productos destacados-->
  <section id="product1" class="section-p1">
    <h2>Te recomendamos</h2>
    <p>Nuestra propia selección</p>
    <div class="pro-container">


    </div>
  </section>

  <!--Banner-->
  <section id="banner" class="section-m1">
    <h4>Los mejores libros</h4>
    <h2>Descuentos de hasta el <span>50%</span> - En selección de libros</h2>
    <button class="normal">Descúbrelos</button>
  </section>

  <!--REVIEW: Hace falta esta sección?-->
  <!--Nuevos productos-->
  <section id="product1" class="section-p1">
    <h2>Lecturas frescas</h2>
    <p>Nuestras últimas llegadas</p>
    <div class="pro-container">
    </div>
  </section>

  <!--Línea de separación-->
  <hr>

  <!--Footer-->
  <?php include "footer.html" ?>

  <!--Modal del carrito-->
  <?php include "php/modal-cart.php" ?>

  <!--Script principal-->
  <script src="scripts/main.js"></script>

  <!--Script del del carrito (móvil)-->
  <script src="scripts/mobile.js"></script>
</body>

</html>