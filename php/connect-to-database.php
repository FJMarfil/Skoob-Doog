<?php

// Nombre del servidor
$serverName = "localhost";
// Nombre de usuario
$userName  = "franmarfil";
// Contraseña
$password = "Mediterraneo@23";
// Nombre de base de datos
$dataBase = "skoobdoog";

// Conexión con base de datos
$conn = new mysqli($serverName, $userName, $password, $dataBase);

// Si la conexión falla, mostrar un mensaje de error
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
    exit();
}

?>