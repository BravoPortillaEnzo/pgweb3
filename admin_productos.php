<?php
// 1. Incluimos la conexión
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin de Productos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Panel de Administración de Productos</h2>
        <hr>

        <div class="card">
            <div class="card-header">
                <strong>Agregar Nuevo Producto</strong>
            </div>
            <div class="card-body">
                <form action="guardar_producto.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio (S/.)</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="mb-3">
                        <label for="url_imagen" class="form-label">URL de Imagen (ej: img/producto.jpg)</label>
                        <input type="text" class="form-control" id="url_imagen" name="url_imagen">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                </form>
            </div>
        </div>

        <hr>

        <h3>Productos Actuales</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // 4. Hacemos la consulta (SELECT) para traer los productos
                $sql = "SELECT id, nombre, precio FROM productos ORDER BY id DESC";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    // 5. Iteramos sobre los resultados y los mostramos
                    while($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td>S/ <?php echo $row["precio"]; ?></td>
                            <td>
                                <a href="eliminar_producto.php?id=<?php echo $row["id"]; ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                                   Eliminar
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay productos registrados.</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>