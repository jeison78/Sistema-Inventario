<?php 

ob_clean();

header('Content-Type: application/json; charset=utf-8');

require_once "db.php";

if(!$conet) {
    echo json_encode(['error' => 'Error de conexión a la base de datos'], JSON_UNESCAPED_UNICODE);
    exit;
}

$productos = [];

$result = $conet->query("SELECT * FROM productos");
if($result) {
    $productos['productos'] = $result->fetch_all(MYSQLI_ASSOC);
}else {
    $productos['error'] = 'Error en la consulta: ' . $conet->error;
}
// $productos['productos'] = $result->fetch_all(MYSQL_ASSOC);

echo json_encode($productos, JSON_UNESCAPED_UNICODE);

$conet->close();

?>