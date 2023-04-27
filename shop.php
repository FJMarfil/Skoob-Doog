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

    <?php
    // REVIEW: 
    // Iniciar la sesión
    if (session_status() == 1) {
        session_start();
    }

    require("php/connect-to-database.php"); // Conectar a la base de datos
    ?>
</head>

<body>

    <!--Header-->
    <?php include "header.php" ?>

    <!--Header de la sección de productos-->
    <section id="page-header">
        <h2>Tienda</h2>
        <p>Explora nuestro amplio catálogo</p>
    </section>

    <!--Sección principal (productos)-->
    <section id="product1" class="section-p1">
        <div class="pro-container">
        </div>
    </section>

    <?php
    mysqli_close($conn); // Cerrar la conexión con la base de datos
    ?>

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