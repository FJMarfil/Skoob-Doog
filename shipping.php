<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Envío - Skoob Doog</title>

    <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!--Importar la hoja de estilos-->
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>

    <section id="page-header">
        <h2>Envío</h2>
    </section>

    <section id="shipping" class="section-p1">
        <h4>Envío</h4>
        <p>Realizamos envíos a toda España, incluyendo las Islas Canarias, Islas Baleares, Ceuta y Melilla.</p>
        <p>El tiempo de entrega varía según el destino y el método de envío que elijas. En España peninsular, el tiempo de entrega estándar es de 1 a 3 días hábiles. Los envíos a las Islas Canarias, Islas Baleares, Ceuta y Melilla pueden demorarse hasta 5 días laborables.</p>
        <p>Para realizar un seguimiento de tu pedido, clic en "Seguir mi pedido". Desde ahí, introduce tu correo electrónico y el número de orden para recibir la información del envío.</p>
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