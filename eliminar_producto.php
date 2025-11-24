<?php
// 1. Verificamos que nos hayan pasado un ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    
    // 2. Incluimos la conexión
    require_once 'conexion.php';
    
    $id_producto = $_GET['id'];
    
    // 3. Sentencia preparada para DELETE (¡Muy importante!)
    $sql = "DELETE FROM productos WHERE id = ?";
    
    if ($stmt = $conexion->prepare($sql)) {
        
        // 4. Vinculamos el ID
        // "i" significa: Integer (entero)
        $stmt->bind_param("i", $id_producto);
        
        // 5. Ejecutamos
        if ($stmt->execute()) {
            // Si se borra, redirigimos de vuelta al panel
            header("Location: admin_productos.php?status=deleted");
            exit();
        } else {
            echo "Error al eliminar el producto: " . $stmt->error;
        }
        
        // 6. Cerramos sentencia
        $stmt->close();
        
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
    
    // 7. Cerramos conexión
    $conexion->close();

} else {
    // Si no hay ID, redirigimos
    header("Location: admin_productos.php");
    exit();
}
?>