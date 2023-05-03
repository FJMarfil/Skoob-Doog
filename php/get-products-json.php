<?php

// Incluir datos del archivo "get-products.php"
require("get-products.php");

// Covertir los datos a un formato JSON, para poder utilizarlo en los archivos JavaScript
// Obtener datos de la base de datos y almacenarlos en la variable "$products"
$products = getProducts();

// Convertir el array a una cadena JSON
$productsJson = json_encode($products);

// Imprimir la cadena JSON
echo $productsJson;

?>
