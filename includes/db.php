<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "inventario";


$conet = new mysqli($servidor, $usuario, $password, $bd);

if (!$conet) {
    die("Error de conexión" . mysqli_connect_error());
}

mysqli_set_charset($conet, "utf8mb4");
