<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto - Mi Tienda Online</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer {
            background-color: orange;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
        .navbar {
            background-color: orange;
        }
        .navbar-brand,
        .nav-link {
            color: white !important;
        }
        .producto-imagen {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="https://media.sipiapa.org/adjuntos/185/imagenes/001/819/0001819726.jpg" alt="Logo" class="d-inline-block align-top" style="height: 40px; width: 60px; margin-right: 8px;">
            Mi Tienda
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon">☰</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container content py-4">
        <h1 class="text-center mb-4">Detalle del Producto</h1>
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/400" alt="Imagen del Producto" class="producto-imagen">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Nombre del Producto</h3>
                        <p class="card-text"><strong>Categoría:</strong> Tecnología</p>
                        <p class="card-text"><strong>Precio:</strong> $500.000 COP</p>
                        <p class="card-text"><strong>Descripción:</strong> Este es un producto de ejemplo con una descripción detallada para mostrar cómo se vería en esta página.</p>
                        <button class="btn btn-success">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mi Tienda Online - Todos los derechos reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
