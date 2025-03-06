<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Mi Tienda Online</title>
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
        .card img {
            height: 150px;
            object-fit: cover;
        }
        .card {
            margin-bottom: 20px;
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

    <!-- Contenido Principal -->
    <div class="container content py-4">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <div class="row">

            <!-- Producto 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Televisor" class="card-img-top" alt="Televisor">
                    <div class="card-body">
                        <h5 class="card-title">Televisor 55"</h5>
                        <p class="card-text">Categoría: Electrodomésticos</p>
                        <p class="card-text">Precio: $2,500,000</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Laptop" class="card-img-top" alt="Laptop Gamer">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Gamer</h5>
                        <p class="card-text">Categoría: Tecnología</p>
                        <p class="card-text">Precio: $4,200,000</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Detergente" class="card-img-top" alt="Detergente">
                    <div class="card-body">
                        <h5 class="card-title">Detergente 5L</h5>
                        <p class="card-text">Categoría: Limpieza</p>
                        <p class="card-text">Precio: $25,000</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Zapatos" class="card-img-top" alt="Zapatos Deportivos">
                    <div class="card-body">
                        <h5 class="card-title">Zapatos Deportivos</h5>
                        <p class="card-text">Categoría: Moda</p>
                        <p class="card-text">Precio: $180,000</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
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
