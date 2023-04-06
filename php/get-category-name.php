<?php

// Función que devuelve el nombre de la categoría de un libro según su ID
function getCategoryName($categoryId)
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT bookCategory_name FROM bookcategory WHERE bookCategory_id = $categoryId;";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Obtener el nombre de la base de datos y mostrarlo
    $row = mysqli_fetch_assoc($result);

    $categoryName = "";

    if ($row) {
        $categoryName = $row["bookCategory_name"];
    }

    // Liberar memoria y cerrar la conexión con la base de datos
    mysqli_free_result($result);
    mysqli_close($conn);
    
    // Devolver el nombre del autor
    return $categoryName;
}

?>