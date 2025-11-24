<?php
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/carrusel.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Lima Botánica</title>
</head>

<body>
  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="img/logo.png" width="150" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
              <li><a class="dropdown-item" href="#">Paisajismo</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Copia de Paisajismo</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Plant Styling</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Mantenimiento del Plantas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Mantenimiento de Orquideas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">🔍</button>
        </form>
        <button type="button" class="btn btn-outline-success ms-2" data-bs-toggle="modal"
          data-bs-target="#modalDeseos">Deseos</button>
        <button type="button" class="btn btn-outline-success ms-2" data-bs-toggle="modal"
          data-bs-target="#modalPedido">Realizar pedido</button>
        <button type="button" class="btn btn-outline-success ms-2" data-bs-toggle="modal"
          data-bs-target="#modalVisita">Reservar visita</button>

        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
          data-bs-target="#inicioSesion">Iniciar sesión </button>
        <!--1Modal-->
        <!-- LOGIN modal -->
        <div class="modal fade" id="inicioSesion" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
          tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Iniciar sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="formLogin" action="p_formularios.php" method="POST">
                  <div class="mb-3">
                    <label for="login-correo" class="col-form-label">Correo:</label>
                    <input type="email" class="form-control" id="login-correo" name="correo" required>
                  </div>
                  <div class="mb-3">
                    <label for="login-password" class="col-form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="login-password" name="contrasena" required>
                  </div>
                </form>
                <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" href="#">Registrarse</a>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="formLogin" name="iniciar_sesion" class="btn btn-outline-success">Iniciar
                  Sesión</button>
              </div>
            </div>
          </div>
        </div>
        <!-- REGISTER modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Registrarse</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formRegistro" action="p_formularios.php" method="POST">
                    <div class="mb-3">
                        <label for="reg-correo" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="reg-correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="reg-password" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="reg-password" name="contrasena" required>
                    </div>
                </form>
                <a data-bs-target="#exampleModalToggle" data-bs-toggle="modal" href="#">Iniciar Sesión</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" form="formRegistro" name="registro_usuario"
                    class="btn btn-primary">Registrarse</button>
            </div>
        </div>
    </div>
</div>



      </div>
    </div>
  </nav>
  <!--2Modal-->
  <!-- Botón para abrir el modal -->
  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Bienvenido
  </button>
  <!-- Estructura del modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bienvenido!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Bienvenido a la tienda virtual de Lima Botanica, descubre nuestro amplio catálogo de plantas, accesorios y
          todo lo que necesitas para cuidar tu jardín y conectar con la naturaleza🌱.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- LISTA DE DESEOS-->
  <div class="modal fade" id="modalDeseos" tabindex="-1" aria-labelledby="modalDeseosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDeseosLabel">Mi lista de deseos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form id="formDeseos" action="p_formularios.php" method="POST">
            <div class="mb-3">
              <label for="deseo-producto" class="form-label">Nombre del producto</label>
              <input type="text" class="form-control" id="deseo-producto" name="producto">
            </div>
            <div class="mb-3">
              <label for="deseo-email" class="form-label">Correo </label>
              <input type="email" class="form-control" id="deseo-email" name="email" placeholder="xxxxxxxx@.com">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="formDeseos" name="guardar_deseo" class="btn btn-success">Guardar deseo</button>
        </div>
      </div>
    </div>
  </div>

  <!-- REALIZAR PEDIDO -->
  <div class="modal fade" id="modalPedido" tabindex="-1" aria-labelledby="modalPedidoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPedidoLabel">Realizar pedido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <!-- p_formularios.php espera 'producto','cantidad','direccion' -->
          <form id="formPedido" action="p_formularios.php" method="POST">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="pedido-nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="pedido-nombre" name="nombre" required>
              </div>

              <div class="col-md-6">
                <label for="pedido-email" class="form-label">Correo</label>
                <input type="email" class="form-control" id="pedido-email" name="email" required>
              </div>

              <div class="col-md-6">
                <label for="pedido-producto" class="form-label">Producto</label>
                <input type="text" class="form-control" id="pedido-producto" name="producto">
              </div>
              <div class="col-md-3">
                <label for="pedido-cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="pedido-cantidad" name="cantidad" min="1" value="1"
                  required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="formPedido" name="guardar_pedido" class="btn btn-success">Confirmar
            pedido</button>
        </div>
      </div>
    </div>
  </div>

  <!-- RESERVAR VISITA -->
  <!-- RESERVAR VISITA -->
  <div class="modal fade" id="modalVisita" tabindex="-1" aria-labelledby="modalVisitaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalVisitaLabel">Reservar visita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body">
          <!-- Formulario enviar visita -->
          <form id="formVisita" action="p_formularios.php" method="POST">

            <div class="mb-3">
              <label for="visita-nombre" class="form-label">Nombre completo</label>
              <input type="text" class="form-control" id="visita-nombre" name="nombre" required>
            </div>

            <div class="mb-3">
              <label for="visita-email" class="form-label">Correo</label>
              <input type="email" class="form-control" id="visita-email" name="email" required>
            </div>

            <div class="col-md-3">
              <label for="pedido-telefono" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="pedido-telefono" name="telefono" placeholder="+51">
            </div>

          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="formVisita" name="guardar_visita" class="btn btn-success">
            Reservar
          </button>
        </div>
      </div>
    </div>
  </div>


  <!-- CARRUSEL 1 -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img PerúSensorial.avif" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h1 class="shadow-outline">Perú Sensorial</h1>
          <h5 class="shadow-outline">Casacor2025</h5>
          <button type="button" class="btn btn-success">conoce más</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img duos.avif" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h1 class="shadow-outline">Dúos</h1>
          <h5 class="shadow-outline">plantas con masetas, listas para ti</h5>
          <button type="button" class="btn btn-success">quiero verlas!</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img plantStudio.avif" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="shadow-outline">Plant studio</h1>
          <h5 class="shadow-outline">Paisajismo y Mantenimiento</h5>
          <button type="button" class="btn btn-success">nuestros servicios</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </nav>
  <br>
  <!-- TARJETAS -->
  <div class="container py-4">
    <nav>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/img tienda.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Tienda</h5>
                      <p class="card-text">Encuentra tu planta ideal dentro de todas las opciones que tenemos.</p>
                      <!-- botón con animación -->
                      <button type="button" class="btn btn-outline-success boton-animado">Ver opciones</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/Paisajismo.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Paisajismo & servicios</h5>
                      <p class="card-text">agenda una asesoría o mantenimiento con nosotros.</p>
                              <!-- Boton contactanos -->
        <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#contactoRapidoModal">
            Contáctanos
        </button>
                       <!-- Modal contactanos -->
    <div class="modal fade" id="contactoRapidoModal" tabindex="-1" aria-labelledby="contactoRapidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="contactoRapidoModalLabel">💬 Solicita que te Llamemos</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Déjanos tus datos y te contactaremos en breve para ayudarte con tu proyecto o consulta.</p>
                    
                    <form action="contacto_rapido.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre-contacto" class="form-label">Tu Nombre:</label>
                            <input type="text" class="form-control" id="nombre-contacto" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono-contacto" class="form-label">Número de Teléfono:</label>
                            <input type="tel" class="form-control" id="telefono-contacto" name="telefono" required>
                        </div>
                        <div class="mb-3">
                            <label for="motivo-contacto" class="form-label">Motivo (Ej. Paisajismo, duda sobre planta):</label>
                            <textarea class="form-control" id="motivo-contacto" name="motivo" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-2">Enviar Solicitud</button>
                    </form>
                </div>
            </div>
        </div>

                      <div class="modal fade" id="SolicitarInformacion" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Rellene sus datos</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                              <form method="post">

                                <form class="row g-3 needs-validation" novalidate>
                                  <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="validationCustom02" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Numero de telefono</label>
                                    <div class="input-group has-validation">
                                      <span class="input-group-text" id="inputGroupPrepend"></span>
                                      <input type="text" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                      <div class="invalid-feedback">
                                        Por favor coloque su correo.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <div class="col-12">
                                    <br>
                                    <button class="btn btn-outline-primary" type="submit">Enviar</button>
                                  </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </nav>
  </div>
  <br>
  <nav>

    <!--animacion de botones-->
    <style>
      .boton-animado {
        transition: transform 0.25s ease, box-shadow 0.25s ease;
      }

      .boton-animado:hover {
        transform: scale(1.08);
        box-shadow: 0 4px 10px rgba(0, 128, 0, 0.3);
      }
    </style>

    <div class="container py-4">
      <h3 class="mb-4">Tienda</h3>

      <!-- CARRUSEL 2 -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="card">
              <img src="img/aglaonema silver queen.png" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title">aglaonema silver queen</h6>
                <p class="text-warning">S/. 45.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/monstera thai.jpg" class="card-img-top" alt="Epipremnum variegado">
              <div class="card-body">
                <h6 class="card-title">Mostera Thai</h6>
                <p class="text-warning">S/. 120.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/peperomia watermelon.jpg" class="card-img-top" alt="Epipremnum neón">
              <div class="card-body">
                <h6 class="card-title">Peperomia watermelon</h6>
                <p class="text-warning">S/. 87.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/monstera borsigiana.jpg" class="card-img-top" alt="Bowl spathiphyllum">
              <div class="card-body">
                <h6 class="card-title">Monstera borsigiana</h6>
                <p class="text-warning">S/. 52.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/peperomia caperata rosada.jpg" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Peperomia caperata rosada</h6>
                <p class="text-warning">S/. 59.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/llamaplata 15cm.png" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Llamaplata 15cm</h6>
                <p class="text-warning">S/. 70.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/peperonia rosada.jpeg" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Peperomia rosada</h6>
                <p class="text-warning">S/. 39.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/peperonia obtusufolia amarilla.png" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Peperomia obtusufolia amarilla</h6>
                <p class="text-warning">S/. 25.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/helecho enano.png" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Helecho enano</h6>
                <p class="text-warning">S/. 34.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/romero.png" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Romero</h6>
                <p class="text-warning">S/. 19.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/zamioculas mediana.jpg" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Zamioculas mediana</h6>
                <p class="text-warning">S/. 149.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/singonio.jpg" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Singonio</h6>
                <p class="text-warning">S/. 49.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="card">
              <img src="img/sansevieria enana verde.png" class="card-img-top" alt="Llamaplata">
              <div class="card-body">
                <h6 class="card-title">Sansevieria enana verde</h6>
                <p class="text-warning">S/. 59.00</p>
                <small class="text-muted">IGV incluido</small>
              </div>
            </div>
          </div>
        </div>

        <!-- CONTROLES SWIPER -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        slidesPerGroup: 1
      });
    </script>
  </nav>
  <br>
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
          <li><a href="productos.html">Productos</a></li>
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

        <!-- Botón justo debajo de CONTACTO -->
        <div class="libro-btn-container">
          <button id="open-modal-btn">Libro de Reclamaciones</button>
        </div>
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

  <!-- MODAL: Libro de Reclamaciones -->
  <div id="reclamaciones-modal" class="modal-libro">
    <div class="modal-content-libro">
      <span class="close-btn">&times;</span>
      <h2>Libro de Reclamaciones</h2>
      <p>Déjanos tus datos y te contactaremos en breve para ayudarte con tu proyecto o consulta.</p>
      <form>
        <label for="nombre">Tu Nombre:</label>
        <input type="text" id="nombre" name="nombre" required />

        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required />

        <label for="motivo">Motivo (Ej. Paisajismo, duda sobre planta):</label>
        <textarea id="motivo" name="motivo" rows="3" required></textarea>

        <button type="submit">Enviar Solicitud</button>
      </form>
    </div>
  </div>

  <!-- Script para el modal -->
  <script>
    const modal = document.getElementById("reclamaciones-modal");
    const openBtn = document.getElementById("open-modal-btn");
    const closeBtn = document.querySelector(".close-btn");

    openBtn.onclick = () => modal.style.display = "block";
    closeBtn.onclick = () => modal.style.display = "none";
    window.onclick = (e) => {
      if (e.target == modal) modal.style.display = "none";
    };
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>