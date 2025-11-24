<?php
// 1. Verificamos que los datos se envíen por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Incluimos la conexión
    // ¡Asegúrate de que este archivo también esté en tu carpeta raíz!
    require_once 'conexion.php';

    // 3. Recibimos los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $motivo = $_POST['motivo'];

    // 4. Preparamos la consulta SQL para INSERTAR en la tabla 'contactos'
    $sql = "INSERT INTO solicitudes_contacto (nombre, telefono, motivo) VALUES (?, ?, ?)";
    
    if ($stmt = $conexion->prepare($sql)) {
        
        // 6. Vinculamos los parámetros
        // "sss" significa: String, String, String
        $stmt->bind_param("sss", $nombre, $telefono, $motivo);
        
        // 7. Ejecutamos la sentencia
        if ($stmt->execute()) {
            // ¡ÉXITO!
            // Redirigimos al usuario de vuelta al index.
            // El "?status=contact_success" es opcional, pero útil para mostrar un mensaje.
            header("Location: index.php?status=contact_success");
            exit();
            
        } else {
            // Si falla, mostramos un error
            echo "Error al guardar el contacto: " . $stmt->error;
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
    header("Location: index.php");
    exit();
}
?>