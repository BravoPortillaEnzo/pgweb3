<?php
// 1. CONEXIÓN A LA BASE DE DATOS
// Incluimos nuestro archivo de conexión.
// La variable $conn estará disponible desde aquí.
require_once 'conexion.php';

// 2. PREPARAMOS LA CONSULTA SQL
// Pedimos todos los productos de la tabla 'productos'.
$sql = "SELECT * FROM productos ORDER BY nombre ASC";

// 3. EJECUTAMOS LA CONSULTA
// Guardamos todos los resultados en la variable $result.
$result = $conexion->query($sql);

// $result ahora contiene todas las filas (productos) de la base de datos.
// Si no hay productos, $result->num_rows será 0.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuestra Tienda - Lima Botánica</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!-- HEADER -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" > <img src="img/logo.png" width="150" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Casacor2025</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">Tienda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Plant Studio
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="paisajismo.html">Paisajismo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Copia de Paisajismo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Plant Styling</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Mantenimiento del Plantas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Mantenimiento de Orquideas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">🔍</button>
      </form>
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#inicioSesion">Iniciar sesión </button>
<!--1Modal-->
      <div class="modal fade" id="inicioSesion" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Iniciar sesión</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Cotraseña:</label>
            <input type="password" class="form-control" id="recipient-password">
          </div>
        </form>
        <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" href="#">Registrarse</a>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Iniciar Sesión</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Registrarse</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Cotraseña:</label>
            <input type="password" class="form-control" id="recipient-password">
          </div>
        </form>
        <a data-bs-target="#exampleModalToggle" data-bs-toggle="modal" href="#">Iniciar Sesión</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrarse</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
  </nav>

<main class="container py-3"> 
  <div class="row row-cols-2 row-cols-md-4 g-5">
    
    <?php
    // 5. EL BUCLE (LOOP) DE PHP
    // Comprobamos si la consulta ($result) trajo más de 0 filas
    if ($result->num_rows > 0) {
        
        // fetch_assoc() toma una fila de resultados y la convierte en un array
        // El bucle 'while' se repetirá por CADA producto en la base de datos
        while($row = $result->fetch_assoc()) {
            
            // $row es ahora un array con los datos de un producto, por ejemplo:
            // $row['id']
            // $row['nombre']
            // $row['descripcion']
            // $row['precio']
            // $row['url_imagen']
            
            // Usamos htmlspecialchars() por seguridad, para evitar ataques XSS
    ?>

        <div class="col">
          <div class="card h-100">
            <img src="<?php echo htmlspecialchars($row['url_imagen']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['nombre']); ?>">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php echo htmlspecialchars($row['nombre']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($row['descripcion']); ?></p>
              
              <p class="fs-4 fw-bold text-success mt-auto">
                S/ <?php echo number_format($row['precio'], 2); ?>
              </p>
              <a href="#" class="btn btn-primary">Ver Producto</a>
            </div>
          </div>
        </div>
        <?php
        } // Fin del 'while'
    } else {
        // 6. MENSAJE SI NO HAY PRODUCTOS
        // Si $result->num_rows es 0, mostramos este mensaje
    ?>
        <div class="col-12">
            <h3 class="text-center text-muted">Aún no hay productos en la tienda. ¡Vuelve pronto!</h3>
        </div>
    <?php
    } // Fin del 'if'
    
    // 7. CERRAMOS LA CONEXIÓN
    $conexion->close();
    ?>
    
  </div>
</main>
   <!-- FOOTER -->
 <footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h3>LIMA BOTÁNICA</h3>
      <p>Tu tienda de confianza para plantas, accesorios y decoración. Productos seleccionados con amor para tu hogar 🌱.</p>
    </div>

    <div class="footer-section">
      <h4>ENLACES</h4>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>SOPORTE</h4>
      <ul>
        <li><a href="#">Preguntas frecuentes</a></li>
        <li><a href="#">Política de privacidad</a></li>
        <li><a href="#">Términos y condiciones</a></li>
        <li><a href="#">Ayuda</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>CONTACTO</h4>
      <p>Lima, Perú</p>
      <p><a href="mailto:francesca@limabotanica.com">francesca@limabotanica.com</a></p>
      <p>+51 ### ### ###</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 Lima Botánica | Todos los derechos reservados</p>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
</footer>
  
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>