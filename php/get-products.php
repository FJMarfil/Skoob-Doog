<?php

function getProducts()
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT * FROM book";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Crear array para almacenar los datos de la base de datos
    $products = array();

    // Obtener los datos de la base de datos y agregarlos al array
    while ($row = mysqli_fetch_assoc($result)) {
        $product = array(
            "isbn" => $row["book_isbn"],
            "title" => $row["book_title"],
            "price" => $row["book_price"],
            "stock" => $row["book_stock"],
            "author" => $row["author_id"],
            "publisher" => $row["publisher_id"],
            "category" => $row["bookCategory_id"]
        );
        array_push($products, $product);
    }

    // Liberar memoria y cerrar la conexión con la base de datos
    mysqli_free_result($result);
    mysqli_close($conn);

    // Devolver array con los datos
    return $products;
}

?>