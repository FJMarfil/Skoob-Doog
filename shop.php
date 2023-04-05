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

    <!--TODO: Quitar enlaces comentados-->
    <!--
        <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
-->

    <?php
    // Conectar a la base de datos
    require("php/connect-to-database.php");
    // Añadir la función para obtener productos
    require("php/get-products.php");
    ?>

</head>

<body>

    <!--Header-->
    <?php include "header.php" ?>

    <section id="page-header">

        <h2>Tienda</h2>

        <p>Explora nuestro amplio catálogo</p>

    </section>
    <?php
    // TODO: Cambiar nombre de imágenes de producto por ISBN

    // TODO: Hacer que cree una sección de libro por cada libro que exista para mostrar todos los productos

    // TODO: Añadir función que obtenga el nombre de autor de un libro

    // TODO: Cambiar isbn por nombre de autor en tienda
    ?>
    <section id="product1" class="section-p1">
        <div class="pro-container">

            <?php
            // Llamar a la función getProducts para obtener los datos de los productos de la base de datos
            $products = getProducts();

            // Recorrer el array obteniendo los datos
            foreach ($products as $value) {
            ?>
                <div class="pro" onclick="window.location.href='productox.html';">
                    <img src="images/update/products/<?php echo $value['isbn']; ?>.png" alt="">
                    <div class="des">
                        <span><?php echo $value['isbn']; ?></span>
                        <h5><?php echo $value['title']; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4><?php echo $value['price']; ?> €</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <?php
    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
    ?>

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