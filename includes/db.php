<?php
$mysqli = new mysqli("localhost", "root", "", "inventario");

if ($mysqli->connect_error) {
    die("Error de conexión" . $mysqli->connect_error);
} else {
    die("Conexión exitosa");
};

$mysqli->set_charset("utf8mb4");
