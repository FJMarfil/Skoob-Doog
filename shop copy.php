<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francisco Jesús Marfil Vargas">

    <title>Tienda - Skoob Doog</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="styles/style.css">

    <!--TODO: Quitar enlaces comentados-->
    <!--
        <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
-->

    <?php

    // Iniciar la sesión
    if (session_status() == 1) {
        session_start();
    }

    // Conectar a la base de datos
    require("php/connect-to-database.php");

    ?>
</head>

<body>

    <!--Header-->
    <?php include "header.php" ?>

    <section id="page-header">

        <h2>Tienda</h2>

        <p>Explora nuestro amplio catálogo</p>

    </section>
    <section id="product1" class="section-p1">
        <div class="pro-container">
        </div>
    </section>

    <?php
    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
    ?>

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


    <div id="modalCart" class="modal-hidden">
        <div class="cart-wrapper">
            <h2>Carrito</h2>
            <div class="cart-container">
            </div>
            <div class="cart-actions">
                <button class="clear-cart">Vaciar carrito</button>
                <button class="buy-cart">Comprar</button>
                <span class="total-price">9999€</span>
            </div>
        </div>
    </div>

    <script src="scripts/script.js"></script>-

    <!--Script del carrito-->
    <script src="scripts/shop.js"></script>

</body>

</html>