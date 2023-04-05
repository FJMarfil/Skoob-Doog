<?php

function getAuthorName($bookIsbn)
{
    // Conexión a base de datos
    require("connect-to-database.php");

    // Consulta para obtener datos de la base de datos
    $query = "SELECT author.author_name FROM book JOIN author ON book.author_id = author.author_id WHERE book.book_isbn = $bookIsbn;";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Comprobar si hay algún error en la consulta
    if (!$result) {
        echo "Error en la consulta: " . mysqli_errno($conn);
        exit();
    }

    // Obtener el nombre de la base de datos y mostrarlo
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo $row['author_name'];
    }

    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
}

?>