<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francisco Jesús Marfil Vargas">

    <title>Sobre nosotros - Skoob Doog</title>

    <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!--Importar la hoja de estilos-->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!--Header-->
    <?php include "header.php" ?>

    <!--Header de la sección de sobre nosotros-->
    <section id="page-header">
        <h2>Sobre nosotros</h2>
        <p>Conoce más sobre nuestra tienda online de literatura</p>
    </section>

    <!--Contenido principal-->
    <section id="about-us" class="section-p1">
        <div class="pro-container">
            <h3>Nuestra historia</h3>
            <p>En Skoob Doog amamos la literatura y creemos que esta puede cambiar vidas. Desde nuestra fundación en el año X, nos hemos dedicado a ofrecer la mejor selección de libros a precios accesibles, con el objetivo de hacer llegar la literatura a todo el mundo.</p>

            <h3>Nuestra filosofía</h3>
            <p>En Skoob Doog creemos que la lectura es un derecho y que todo el mundo debería tener acceso a los libros. Por eso, trabajamos día a día para ofrecer una selección de títulos amplia y variada, con el objetivo de que nuestros clientes encuentren lo que están buscando.</p>

            <h3>Nuestro equipo</h3>
            <p>En Skoob Doog contamos con un equipo de apasionados por la literatura, dedicados a ofrecer la mejor experiencia de compra a nuestros clientes. Desde el equipo de compras, hasta el de atención al cliente, todos trabajamos juntos para asegurarnos de que cada pedido llegue a su destino en perfectas condiciones.</p>

            <h3>Contacto</h3>
            <p>Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto con nosotros. Puedes hacerlo a través de nuestro formulario de contacto o en nuestras redes sociales.</p>
        </div>
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