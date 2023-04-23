<?php

function getProducts()
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT book.*, author.author_name, publisher.publisher_name, bookcategory.bookCategory_name FROM book INNER JOIN author ON book.author_id = author.author_id INNER JOIN publisher ON book.publisher_id = publisher.publisher_id INNER JOIN bookcategory ON book.bookCategory_id = bookcategory.bookCategory_id;";
    

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
            "category" => $row["bookCategory_id"],
            "authorName" => $row["author_name"],
            "publisherName" => $row["publisher_name"],
            "categoryName" => $row["bookCategory_name"],
            "quantity" => 0
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