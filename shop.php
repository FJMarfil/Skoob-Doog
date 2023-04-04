<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Tienda - Skoob Doog</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="styles/style.css" />
    <!--
        <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
-->
</head>

<body>

    <!--Header-->
    <?php include "header.php" ?>

    <section id="page-header">

        <h2>Tienda</h2>

        <p>Explora nuestro amplio catálogo</p>

    </section>
    <?php
    // TODO: Cambiar nombre de imágenes de producto por ISBN.
    // TODO: Añadir productos desde base de datos.
    ?>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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


    <script src="script.js"></script>
</body>

</html>