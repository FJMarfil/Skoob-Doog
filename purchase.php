<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francisco Jesús Marfil Vargas">

    <title>Finalizar compra - Skoob Doog</title>

    <!--Importar la librería font-awesome (contiene fuentes e iconos que se utilizarán en la web)-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!--Importar la hoja de estilos-->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>

    <section id="page-header">
        <h2>Finalizar Compra</h2>
    </section>

    <!--Formulario de email-->
    <section id="purchase-form-email" class="section-p1 form">
        <form>
            <!--Correo electrónico-->
            <h4>Introduce tu correo electrónico</h4>
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" id="purchase-form-email-button" value="Continuar">
            <label for="email" id="email-error">¡Introduce un correo electrónico válido!</label>
        </form>
    </section>

    <!--Formulario de compra-->
    <section id="purchase-form" class="section-p1 form">
        <form action="php/make-order.php" method="POST">
            <!--Detalles del cliente-->
            <h4>Introduce tus datos</h4>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">Apellidos</label>
            <input type="text" id="surname" name="surname" required>

            <label for="email2">Correo electrónico</label>
            <input type="email" id="email2" name="email2" required>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" required>

            <!--Detalles del envío-->
            <h4>Detalles del envío</h4>
            <label for="address">Dirección de envío</label>
            <input type="text" id="address" name="address" required>

            <label for="city">Ciudad</label>
            <input type="text" id="city" name="city" required>

            <label for="postal-code">Código postal</label>
            <input type="text" id="postal-code" name="postal-code" maxlength="5" pattern="[0-9]{5}" required>

            <label for="province">Provincia</label>
            <input type="text" id="province" name="province" required>

            <!--Información de pago-->
            <h4>Información de pago</h4>
            <label for="card">Número de tarjeta</label>
            <input type="tel" id="card" pattern="[0-9\s]{13,19}" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>

            <label for="expiration-date">Fecha de vencimiento</label>
            <input type="date" id="expiration-date" name="expiration-date" required>

            <label for="cvv">CVV</label>
            <input type="tel" id="cvv" name="cvv" pattern="[0-9]{3}" placeholder="000" required>

            <span id="total-price-span"></span>
            <input type="hidden" id="order-price" name="order-price" value="">

            <input type="submit" id="purchase-form-button" value="Finalizar Compra">
        </form>
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