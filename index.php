<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Skoob Doog</title>

    <!--Importamos la librería font-awesome (contiene fuentes e iconos que utilizaremos)-->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <link rel="stylesheet" href="styles/style.css" />
    <!--
      <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
-->
  </head>

  <body>
    <!--Header-->
    <?php include "header.html"?>

    <!--Hero-->
    <section id="hero">
      <h4>¡Nuevas ofertas!</h4>
      <h2>Super ofertas</h2>
      <h1>En muchos de nuestros libros</h1>
      <p>Ahorra hasta un 50%</p>
      <button>Comprar ahora</button>
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
      <h2>Libros destacados</h2>
      <p>Nuestros productos estrella</p>
      <div class="pro-container">
        <div class="pro">
          <img src="images/update/products/product-f1.png" alt="" />
          <div class="des">
            <span>Viktor Frankl</span>
            <h5>El hombre en busca de sentido</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>12,50 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f2.png" alt="" />
          <div class="des">
            <span>J. K. Rowling</span>
            <h5>Harry Potter y la piedra filosofal</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>14,50 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f3.png" alt="" />
          <div class="des">
            <span>Ted Chiang</span>
            <h5>La historia de tu vida</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>18,95 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f4.png" alt="" />
          <div class="des">
            <span>Eloy Moreno</span>
            <h5>Invisible</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>15 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f5.png" alt="" />
          <div class="des">
            <span>Robin Sharma</span>
            <h5>El monje que vendió su Ferrari: Una fábula espiritual</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>9,50 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f6.png" alt="" />
          <div class="des">
            <span>Stephen King</span>
            <h5>Mr. Mercedes</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>10 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f7.png" alt="" />
          <div class="des">
            <span>Santiago Posteguillo</span>
            <h5>Roma soy yo: La verdadera historia de Julio César</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>14,95 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="images/update/products/product-f8.png" alt="" />
          <div class="des">
            <span>George Orwell</span>
            <h5>1984</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>8,25 €</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    </section>

    <!--Banner-->
    <section id="banner" class="section-m1">
      <h4>Los mejores libros</h4>
      <h2>Descuentos de hasta el <span>50%</span> - En selección de libros</h2>
      <button class="normal">Descúbrelos</button>
    </section>

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
    <?php include "footer.html"?>

    <!--Script-->
    <script src="scripts/script.js"></script>
  </body>
</html>
