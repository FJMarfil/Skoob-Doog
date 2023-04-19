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
  // Añadir la función para obtener los datos de un libro por su ISBN
  require("php/get-product-by-isbn.php");
  // Añadir función que obtiene el nombre de autor según un ISBN dado
  require("php/get-author-name.php");
  // Añadir función que obtiene la categoría de un libro según un ISBN dado
  require("php/get-category-name.php");

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

      <?php
      // TODO: Cambiar ubicación de array a otra sección más accesible u otro archivo
      // Array donde se puede elegir libros que destacar
      $products = array(
        '9788425432026',
        '9788498891355',
        '9788490627662',
        '9788499890944'
      );

      // Llamar a la función getProductByIsbn para obtener los datos de los libros para destacar
      for ($i = 0; $i < count($products); $i++) {
        $product = getProductByIsbn($products[$i]);

        // Recorrer el array obteniendo los datos
        foreach ($product as $value) {
      ?>
          <div class="pro" onclick="window.location.href='productox.html';">
            <img src="images/update/products/<?php echo $value['isbn']; ?>.png" alt="">
            <div class="des">
              <span><?php echo getCategoryName($value['category']); ?></span>
              <h3><?php echo $value['title']; ?></h3>
              <h5><?php echo getAuthorName($value['author']); ?></h5>
              <h4><?php echo $value['price']; ?> €</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
          </div>
      <?php
        }
      }
      ?>


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
      <div class="pro">
        <img src="images/update/products/product-n1.png" alt="" />
        <div class="des">
          <span>Javier Castillo</span>
          <h5>El cuco de cristal</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>19,95 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n2.png" alt="" />
        <div class="des">
          <span>John Boyne</span>
          <h5>Todas las piezas rotas</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>19 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n3.png" alt="" />
        <div class="des">
          <span>Príncipe Harry duque de Sussex</span>
          <h5>En la sombra</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>21,95 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n4.png" alt="" />
        <div class="des">
          <span>Tracy Wolff</span>
          <h5>Hechizo</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>18,50 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n5.png" alt="" />
        <div class="des">
          <span>H. D. Carlton</span>
          <h5>Haunting Adeline</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>18 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n6.png" alt="" />
        <div class="des">
          <span>Camilla Läckberg</span>
          <h5>La secta</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>22,75 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n7.png" alt="" />
        <div class="des">
          <span>Fernando Aramburu</span>
          <h5>Hijos de la fábula</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>19,50 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
      <div class="pro">
        <img src="images/update/products/product-n8.png" alt="" />
        <div class="des">
          <span>Inma Rubiales</span>
          <h5>El arte de ser nosotros</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>17 €</h4>
        </div>
        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
      </div>
    </div>
  </section>

  <!--Boletín de noticias-->
  <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
      <h4>Suscríbete a nuestro boletín</h4>
      <p>
        Recibe correos informativos sobre novedades y
        <span>ofertas especiales</span>
      </p>
    </div>
    <div class="form">
      <input type="text" placeholder="Escribe tu correo" />
      <button class="normal">Registrarse</button>
    </div>
  </section>

  <!--Footer-->
  <?php include "footer.html" ?>

  <!--Script-->
  <script src="scripts/script.js"></script>
</body>

</html>