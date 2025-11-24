<?php
// 1. Verificamos que los datos se envíen por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Incluimos la conexión
    require_once 'conexion.php';

    // 3. Recibimos los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $url_imagen = $_POST['url_imagen'];

    // 4. Preparamos la consulta SQL para INSERTAR
    // Usamos "sentencias preparadas" (?, ?, ?, ?) para evitar Inyección SQL.
    $sql = "INSERT INTO productos (nombre, descripcion, precio, url_imagen) VALUES (?, ?, ?, ?)";
    
    // 5. Preparamos la sentencia
    if ($stmt = $conexion->prepare($sql)) {
        
        // 6. Vinculamos los parámetros
        // "ssds" significa: String, String, Double, String
        $stmt->bind_param("ssds", $nombre, $descripcion, $precio, $url_imagen);
        
        // 7. Ejecutamos la sentencia
        if ($stmt->execute()) {
            // Si todo sale bien, redirigimos al usuario de vuelta al panel de admin
            header("Location: admin_productos.php?status=success");
            exit();
        } else {
            echo "Error al guardar el producto: " . $stmt->error;
        }
        
        // 8. Cerramos la sentencia
        $stmt->close();
        
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }

    // 9. Cerramos la conexión
    $conexion->close();

} else {
    // Si alguien intenta acceder a este archivo directamente, lo sacamos.
    header("Location: admin_productos.php");
    exit();
}
?>