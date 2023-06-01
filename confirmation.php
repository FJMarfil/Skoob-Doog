<?php
// Obtener el número de referencia del pedido de la URL
$orderReference = $_GET['order'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Francisco Jesús Marfil Vargas" />

    <title>Confirmación de pedido - Skoob Doog</title>

    <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!--Importar la hoja de estilos-->
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>

    <section id="page-header">
        <h2>Confirmación de envío</h2>
    </section>

    <section id="confirmation" class="section-p1">
        <h4>¡La compra se ha realizado con éxito!</h4>
        <p>Para comprobar el estado de tu pedido, dirígete al enlace de "Seguir mi pedido" y escribe el correo con el que has realizado dicho pedido y el número de referencia.</p>
        <p>Número de referencia del pedido: <?php echo $orderReference ?></p>

        <button id="home-button">Volver a inicio</button>
    </section>

    <!--Línea de separación-->
    <hr>

    <!--Footer-->
    <?php include "footer.html" ?>

    <!--Modal del carrito-->
    <?php include "php/modal-cart.php" ?>

    <!--Script principal-->
    <script src="scripts/main.js" defer></script>

    <!--Script del del carrito (móvil)-->
    <script src="scripts/mobile.js"></script>
</body>

</html>