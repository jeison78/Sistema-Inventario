    <?php
    require_once 'db.php';

    function listarProductos(mysqli $conect)
    {
        $query = "SELECT c.nombre AS categoria, p.nombre, p.marca, p.modelo, p.color, p.precio, p.stock, p.fecha FROM categorias c" .
            " INNER JOIN productos p ON c.id = p.categoria_id";
        $productos  = mysqli_query($conect, $query);
        return $productos;
    }

    function listarVentas(mysqli $conect)
    {
        $query = "SELECT p.nombre as producto, v.cantidad, v.precio, v.descuento, v.total, v.fecha FROM ventas v INNER JOIN productos p" .
            " ON v.producto_id = p.id";
        $ventas = mysqli_query($conect, $query);
        if (!$ventas) {
            die("Error en la consulta de ventas: " . mysqli_error($conect));
        }
        return $ventas;
    }
