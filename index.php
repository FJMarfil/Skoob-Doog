<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Francisco Jesús Marfil Vargas">

  <title>Skoob Doog</title>

  <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

  <!--Importar la hoja de estilos-->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <!--Header-->
  <?php include "header.php"; ?>

  <!--Hero-->
  <section id="hero">
    <h4>¡Mira nuestro catálogo!</h4>
    <h2>Super ofertas</h2>
    <h1>Tus libros preferidos al mejor precio</h1>
    <p>Ahorra con Skoob Doog</p>
    <a href="shop.php"><button>Ir a la tienda</button></a>
  </section>

  <!--Características-->
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="images/update/features/fast-delivery.png" alt="">
      <h6>Envíos rápidos</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/best-prices.png" alt="">
      <h6>Mejores precios</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/books.png" alt="">
      <h6>Gran variedad de libros</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/assistance.png" alt="">
      <h6>Asistencia</h6>
    </div>
    <div class="fe-box">
      <img src="images/update/features/secure-payment.png" alt="">
      <h6>Pago seguro</h6>
    </div>
  </section>

  <!--Productos destacados-->
  <section id="product1" class="section-p1">
    <h2>Te recomendamos</h2>
    <p>Nuestra propia selección</p>

    <div class="pro-container"></div>
  </section>

  <!--Banner-->
  <section id="banner" class="section-m1">
    <h4>Los mejores libros</h4>
    <h2>Descuentos de hasta el <span>50%</span> - En selección de libros</h2>
    <a href="shop.php"><button class="banner-button">Descúbrelos</button></a>
  </section>

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