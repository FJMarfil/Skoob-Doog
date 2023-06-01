    <?php

    // Conexión a base de datos
    require("connect-to-database.php");

    // Declaración de variables
    $orderDate = date("Y-m-d"); // Fecha de compra
    $orderShippingMethod = "Tarjeta de crédito"; // Método de pago

    // Obtener los datos del formulario
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email2"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postalCode = intval($_POST["postal-code"]);
    $province = $_POST["province"];
    $orderPrice = $_POST["order-price"]; // Precio total

    // -----

    // Consulta para crear los datos del usuario o actualizarlos, en el caso de que ya exista (según el correo introducido)
    $userQuery = "
    INSERT INTO user (user_name, user_surname, user_email, user_phone, user_address, user_city, user_postalCode, user_province)
    VALUES ('$name', '$surname', '$email', '$phone', '$address', '$city', '$postalCode', '$province')
    ON DUPLICATE KEY UPDATE
    user_name = '$name',
    user_surname = '$surname',
    user_phone = '$phone',
    user_address = '$address',
    user_city = '$city',
    user_postalCode = '$postalCode',
    user_province = '$province'
";

    // Ejecutar la consulta del usuario
    $userResult = mysqli_query($conn, $userQuery);

    // Comprobar si hay algún error en la consulta
    if (!$userResult) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // --------

    // Consulta para buscar el ID del usuario por según su correo
    $userIdQuery = "SELECT user_id FROM user WHERE user_email = '$email'";

    // Ejecutar la consulta
    $userIdResult = mysqli_query($conn, $userIdQuery);

    // Comprobar si hay algún error en la consulta
    if (!$userIdResult) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Obtener ID del usuario
    $userData = mysqli_fetch_assoc($userIdResult);
    $userID = $userData['user_id'];

    // -----

    // Consulta para insertar la compra en la base de datos
    $orderQuery = "
INSERT INTO orders (order_date, order_shippingMethod, order_price, order_status, order_name, order_surname, order_email, order_phone, order_address, order_city, order_postalCode, order_province, user_id)
VALUES ('$orderDate', '$orderShippingMethod', '$orderPrice', 'Confirmado', '$name', '$surname', '$email', '$phone', '$address', '$city', '$postalCode', '$province', '$userID')
";

    // Ejecutar la consulta de la compra
    $orderResult = mysqli_query($conn, $orderQuery);

    // Comprobar si hay algún error en la consulta
    if (!$orderResult) {
        echo "Error en la consulta de la compra: " . mysqli_errno($conn);
        exit();
    }
    if (mysqli_affected_rows($conn) > 0) {
        // Obtener el número de referencia del pedido (el ID de la última inserción)
        $orderReference = mysqli_insert_id($conn);

        // Mostrar el mensaje al usuario
        echo "¡La compra se ha realizado con éxito!";
        echo "Número de referencia del pedido: " . $orderReference;
    } else {
        echo "No se ha podido realizar la compra. Por favor, inténtalo de nuevo.";
    }


    // Cerrar la conexión con la base de datos
    mysqli_close($conn);


    // TODO: CREAR REGISTRO DE COMPRA CON DATOS Y SUMA DE PRECIO

    // TODO: MOSTRAR POR PANTALLA QUE LA COMPRA SE HA REALIZADO Y MOSTRAR EL NÚMERO DE REFERENCIA DEL PEDIDO

    // TODO: ENVIAR POR CORREO LA INFORMACIÓN DEL PEDIDO

    // TODO: REDUCIR CANTIDAD DE PRODUCTOS DEL STOCK SEGÚN LA COMPRA

    // TODO: VACIAR CARRITO

    ?>