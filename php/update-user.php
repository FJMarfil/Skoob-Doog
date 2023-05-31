    <?php

    // Conexión a base de datos
    require("connect-to-database.php");

    // Obtener los datos del formulario
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email2"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postalCode = intval($_POST["postal-code"]);
    $province = $_POST["province"];

    // Consulta para crear los datos del usuario o actualizarlos, en el caso de que ya exista (según el correo introducido)
    $query = "
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

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Cerrar la conexión con la base de datos
    mysqli_close($conn);

    ?>