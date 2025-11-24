<?php
session_start();
require_once "conexion.php";

if (isset($_POST['registro_usuario'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conexion->prepare("INSERT INTO usuarios (correo, contrasena) VALUES (?, ?)");
    $stmt->bind_param("ss", $correo, $contrasena);

    if ($stmt->execute()) {
        header("Location: index.php?msg=registro_ok");
        exit();
    } else {
        header("Location: index.php?msg=error_registro");
        exit();
    }
}

if (isset($_POST['iniciar_sesion'])) {

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
    $stmt->bind_param("ss", $correo, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $_SESSION['usuario'] = $correo;
        header("Location: index.php?msg=login_ok");
        exit();
    } else {
        header("Location: index.php?msg=login_error");
        exit();
    }
}

if (isset($_POST['guardar_deseo'])) {

    $producto = $_POST['producto'];
    $email = $_POST['email'];

    $stmt = $conexion->prepare("INSERT INTO deseos (producto, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $producto, $email);

    if ($stmt->execute()) {
        header("Location: index.php?msg=deseo_ok");
        exit();
    } else {
        header("Location: index.php?msg=deseo_error");
        exit();
    }
}

if (isset($_POST['guardar_pedido'])) {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    $stmt = $conexion->prepare("INSERT INTO pedidos (nombre, email, producto, cantidad) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nombre, $email, $producto, $cantidad);

    if ($stmt->execute()) {
        header("Location: index.php?msg=pedido_ok");
        exit();
    } else {
        header("Location: index.php?msg=pedido_error");
        exit();
    }
}

if (isset($_POST['guardar_visita'])) {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $stmt = $conexion->prepare("INSERT INTO visitas (nombre, email, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $telefono);

    if ($stmt->execute()) {
        header("Location: index.php?msg=visita_ok");
        exit();
    } else {
        header("Location: index.php?msg=visita_error");
        exit();
    }
}
?>
