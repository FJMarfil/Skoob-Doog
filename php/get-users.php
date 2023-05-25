<?php

function getUsers()
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT * FROM user";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Crear array para almacenar los datos de la base de datos
    $users = array();

    // Obtener los datos de la base de datos y agregarlos al array
    while ($row = mysqli_fetch_assoc($result)) {
        $user = array(
            "id" => $row["user_id"],
            "name" => $row["user_name"],
            "surname" => $row["user_surname"],
            "email" => $row["user_email"],
            "phone" => $row["user_phone"],
            "address" => $row["user_address"],
            "city" => $row["user_city"],
            "postalCode" => $row["user_postalCode"],
            "province" => $row["user_province"]
        );
        array_push($users, $user);
    }

    // Liberar memoria y cerrar la conexión con la base de datos
    mysqli_free_result($result);
    mysqli_close($conn);

    // Devolver array con los datos
    return $users;
}

// Covertir los datos a un formato JSON, para poder utilizarlo en los archivos JavaScript
// Obtener datos de la base de datos y almacenarlos en la variable "$users"
$users = getUsers();

// Convertir el array a una cadena JSON
$usersJson = json_encode($users);

// Imprimir la cadena JSON
echo $usersJson;

?>
