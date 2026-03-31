<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "inventario";


$conect = new mysqli($servidor, $usuario, $password, $bd);

if (!$conect) {
    die("Error de conexión" . mysqli_connect_error());
}

mysqli_set_charset($conect, "utf8mb4");
