<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - Mi Tienda Online</title>
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
        <h1 class="text-center mb-4">Crear Nuevo Producto</h1>
        <div class="card">
            <div class="card-body">
                <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                            <option value="">Seleccione una categoría</option>
                            <option value="Electrodomésticos">Electrodomésticos</option>
                            <option value="Tecnología">Tecnología</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Moda">Moda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen del Producto:</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar Producto</button>
                </form>
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
