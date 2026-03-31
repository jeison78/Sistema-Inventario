<?php
require_once 'includes/lateral.php';
// require_once 'includes/db.php';
require_once 'includes/helpers.php';
?>

<div class="main-content">

    <div id="productos" class="tab-content">
        <div class="content-header">
            <h2>Gestión de Productos</h2>
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-header">Registrar Nuevo Producto</div>
                <div class="card-body">
                    <form id="formProducto" onsubmit="registrarProducto(event)">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="codigoProd">Código *</label>
                                <input id="codigoProd" type="text" placeholder="Código único del producto" required>
                            </div>
                            <div class="form-group">
                                <label for="nombreProd">Nombre *</label>
                                <input id="nombreProd" type="text" placeholder="Nombre del producto" required>
                            </div>
                            <div class="form-group">
                                <label for="unidadProd">Unidad de Medida</label>
                                <select id="unidadProd" required></select>
                            </div>
                            <div class="form-group">
                                <label for="grupoProd">Categoria</label>
                                <select id="grupoProd" required></select>
                            </div>
                            <div class="form-group">
                                <label for="stockMinProd">Stock Mínimo</label>
                                <input id="stockMinProd" type="number" min="0" value="0">
                            </div>
                        </div>
                        <div class="actions">
                            <button type="submit" class="btn btn-success">
                                Registrar Producto
                            </button>
                            <button type="button" class="btn btn-secondary" onclick="limpiarFormProducto()">
                                Limpiar
                            </button>
                        </div>
                    </form>
                    <div id="msgProd"></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>marca</th>
                            <th>modelo</th>
                            <th>color</th>
                            <th>precio</th>
                            <th>stock</th>
                            <th>Fecha Registro</th>
                            <!-- <th>Fecha Actualización</th> -->
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $productos = listarProductos($conect) ?>
                        <?php while ($row = $productos->fetch_assoc()) : ?>
                            <tr>
                                <td><?= $row['nombre'] ?></td>
                                <td><?= $row['categoria'] ?></td>
                                <td><?= $row['marca'] ?></td>
                                <td><?= $row['modelo'] ?></td>
                                <td><?= $row['color'] ?></td>
                                <td><?= $row['precio'] ?></td>
                                <td><?= $row['stock'] ?></td>
                                <td><?= $row['fecha'] ?></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="inventario" class="tab-content">
        <div class="content-header">
            <h2>Control de Inventario</h2>
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-header">Registrar Venta</div>
                <div class="card-body">
                    <form id="formProducto" onsubmit="registrarProducto(event)">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="codigoProd">Código *</label>
                                <input id="codigoProd" type="text" placeholder="Código único del producto" required>
                            </div>
                            <div class="form-group">
                                <label for="nombreProd">Nombre *</label>
                                <input id="nombreProd" type="text" placeholder="Nombre del producto" required>
                            </div>
                            <div class="form-group">
                                <label for="unidadProd">Unidad de Medida</label>
                                <select id="unidadProd" required></select>
                            </div>
                            <div class="form-group">
                                <label for="grupoProd">Categoria</label>
                                <select id="grupoProd" required></select>
                            </div>
                            <div class="form-group">
                                <label for="stockMinProd">Stock Mínimo</label>
                                <input id="stockMinProd" type="number" min="0" value="0">
                            </div>
                        </div>
                        <div class="actions">
                            <button type="submit" class="btn btn-success">
                                Registrar Producto
                            </button>
                            <button type="button" class="btn btn-secondary" onclick="limpiarFormProducto()">
                                Limpiar
                            </button>
                        </div>
                    </form>
                    <div id="msgProd"></div>
                </div>
                <table class="tbl-inventario">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <!-- <th>Acciones</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ventas = listarVentas($conect) ?>
                        <?php while ($row = $ventas->fetch_assoc()) : ?>
                            <tr>
                                <td><?= $row['producto'] ?></td>
                                <td><?= $row['cantidad'] ?></td>
                                <td><?= $row['precio'] ?></td>
                                <td><?= $row['descuento'] ?></td>
                                <td><?= $row['total'] ?></td>
                                <td><?= $row['fecha'] ?></td>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <div id="dashboard" class="tab-content active">
        <div class="content-header">
            <h2>Dashboard General</h2>
        </div>
        <div class="content-body">
            <div class="stats-grid" id="statsGrid"></div>
            <div class="card">
                <div class="card-header">Alertas de Stock</div>
                <div class="card-body">
                    <div class="actions">
                        <button class="btn btn-primary" onclick="loadDashboard()">
                            Actualizar Dashboard
                        </button>
                        <button class="btn btn-warning" onclick="showStockAlerts()">
                            Ver Alertas de Stock
                        </button>
                    </div>
                    <div id="alertsContainer"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="buscar" class="tab-content">
        <div class="content-header">
            <h2>Búsqueda de Productos</h2>
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-header">Buscar Productos</div>
                <div class="card-body">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="buscarTexto">Buscar por código, nombre o grupo</label>
                            <input id="buscarTexto" type="text" placeholder="Escriba para buscar..." onkeyup="buscarEnTiempoReal()">
                        </div>
                    </div>
                    <div class="actions">
                        <button class="btn btn-primary" onclick="buscarProducto()">
                            Buscar
                        </button>
                        <button class="btn btn-secondary" onclick="limpiarBusqueda()">
                            Limpiar
                        </button>
                    </div>
                    <div class="table-container">
                        <div id="resultadosBusqueda"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>

<?php require_once 'includes/footer.php'; ?>