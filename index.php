<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SAKURA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu-general">Menú General</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pedidos">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#comentarios">Comentarios</a></li>
                    <li class="nav-item"><a class="btn btn-outline-light nav-link" href="login.php" role="button">Iniciar Sesión</a>
</li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de bienvenida -->
    <section class="hero">
        <div class="container text-center text-white">
            <h1 class="display-4">Bienvenidos a SAKURA café bar</h1>
            <p class="lead">El mejor lugar para disfrutar de un buen café en un ambiente acogedor.</p>
            <a href="#menu-general" class="btn btn-light btn-lg">Ver Menú</a>
        </div>
    </section>

    <!-- Menú General -->
            <section id="menu-general" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Nuestro Menú</h2>
        <input type="text" id="searchInput" class="form-control mb-4" placeholder="Buscar productos..." onkeyup="filterProducts()">
        <div class="row" id="productList">

            <!-- Producto 1 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/capuchino.jpeg" class="card-img-top img-small" alt="Capuchino Baileys">
                    <div class="card-body text-center">
                        <h5 class="card-title">Capuchino Baileys</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Capuchino Baileys', 'Café expreso, leche y Baileys', 7000, 'imagenes/capuchino.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/malteada de fresa.jpeg" class="card-img-top img-small" alt="Malteada de fresa">
                    <div class="card-body text-center">
                        <h5 class="card-title">Malteada de fresa</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Malteada de fresa', 'Malteada de frutos rojos, helado de vainilla', 11500, 'imagenes/malteada de fresa.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/malteada de chocolate.jpeg" class="card-img-top img-small" alt="Malteada de chocolate">
                    <div class="card-body text-center">
                        <h5 class="card-title">Malteada de chocolate</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Malteada de chocolate', 'Leche fría, helado y Oreo', 12000, 'imagenes/malteada de chocolate.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/waffles con helado.jpeg" class="card-img-top img-small" alt="Waffle Tentación">
                    <div class="card-body text-center">
                        <h5 class="card-title">Waffle Tentación</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Waffle Tentación', 'Waffle con helado y gomitas', 12000, 'imagenes/waffles con helado.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/postre de la casa.jpeg" class="card-img-top img-small" alt="Postre de la Casa">
                    <div class="card-body text-center">
                        <h5 class="card-title">Postre de la Casa</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Postre de la Casa', 'Postre de Oreo', 8000, 'imagenes/postre de la casa.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/origenes del sur.jpeg" class="card-img-top img-small" alt="Orígenes del Sur">
                    <div class="card-body text-center">
                        <h5 class="card-title">Orígenes del Sur</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Orígenes del Sur', 'Deliciosa bebida de lulo', 13000, 'imagenes/origenes del sur.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/coctel .jpeg" class="card-img-top img-small" alt="Cóctel Dirty Banana">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cóctel Dirty Banana</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Cóctel Dirty Banana', 'Crema de leche, licor de plátano, Kahlúa y plátano', 15000, 'imagenes/coctel .jpeg')">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Producto 8 -->
            <div class="col-md-2">
                <div class="card shadow-sm menu-item">
                    <img src="imagenes/lan.jpeg" class="card-img-top img-small" alt="Cóctel Primavera">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cóctel Primavera</h5>
                        <a href="#" class="btn btn-primary" onclick="openModal('Cóctel Primavera', 'Crema de leche, licor de plátano, Kahlúa y plátano', 15000, 'imagenes/lan.jpeg')">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Sección de Servicios -->
    <section id="pedidos" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros Servicios</h2>
            <h2 class="text-center">Organizamos TU EVENTO SOCIAL</h2>
            <p class="lead text-center">
                ➮ Matrimonios y Aniversarios de Bodas<br>
                ➮ Cumpleaños y Quince Años<br>
                ➮ Baby Shower y Cafés<br>
                ➮ Eventos Familiares y Empresariales<br>
                ➮ Y todo tipo de Eventos Sociales
            </p>
        </div>
    </section>

    <!-- Sección de Comentarios -->
    <section id="comentarios" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Comentarios del Café Bar</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Si te gustó nuestro servicio, déjanos un comentario.</h5>
                    <form id="commentForm" action="guardar_comentario.php" method="POST">
                        <input type="hidden" name="producto" value="">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea class="form-control" name="comentario" rows="3" maxlength="200" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Contacto</h5>
                    <p>📍 Dirección: Kra 7 #5-52</p>
                    <p>📞 Teléfono: 311 4879853</p>
                    <p>✉ Email: sakuracafebar665@gmail.com</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/sakura_cafe.bar1?igsh=MXBtN3F0ZnZjczZlaA==" target="_blank">
                            <img src="imagenes/Instagram-Logo.png" alt="Instagram">
                        </a>
                        <a href="https://www.facebook.com/share/rZ6ruJyfXSJEE17S/" target="_blank">
                            <img src="imagenes/logo-facebook.png" alt="Facebook">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para mostrar detalles del producto y permitir comentarios -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalProductImage" class="img-fluid" alt="Producto">
                    <p id="productDescription"></p>
                    <p>Precio: $<span id="productPrice"></span></p>
                    <form id="productCommentForm" action="guardar_comentario.php" method="POST">
                        <input type="hidden" name="producto" id="productName">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea class="form-control" name="comentario" rows="3" maxlength="200" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
