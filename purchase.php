<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Página de compra - Skoob Doog</title>

    <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!--Importar la hoja de estilos-->
    <link rel="stylesheet" href="styles/style.css" />

    <!--Conectar a la base de datos-->
    <?php require("php/connect-to-database.php");
    // REVIEW: Aún no se ha utilizado la base de datos ?>
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>

    <!--REVIEW: No hay ofertas actualmente. ¿Se van a implementar?-->
    <!--Hero-->
    <section id="hero">
        <h4>¡Mira nuestro catálogo!</h4>
        <h2>Super ofertas</h2>
        <h1>Tus libros preferidos al mejor precio</h1>
        <p>Ahorra con Skoob Doog</p>
        <a href="shop.php"><button>Ir a la tienda</button></a>
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