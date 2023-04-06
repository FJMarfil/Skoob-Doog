<?php

// Función que devuelve el nombre del autor según su ID
function getAuthorName($authorId)
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT author_name FROM author WHERE author_id = $authorId;";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Obtener el nombre de la base de datos y mostrarlo
    $row = mysqli_fetch_assoc($result);

    $authorName = "";

    if ($row) {
        $authorName = $row["author_name"];
    }

    // Liberar memoria y cerrar la conexión con la base de datos
    mysqli_free_result($result);
    mysqli_close($conn);
    
    // Devolver el nombre del autor
    return $authorName;
}

?>