<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Mi Tienda Online</title>
    <!-- Bootstrap por CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            color: #333;
        }
        .navbar {
            background-color: orange;
        }
        .navbar-brand,
        .nav-link {
            color: white !important;
        }
        .category-card {
            border: 1px solid orange;
            transition: transform 0.2s;
        }
        .category-card:hover {
            transform: translateY(-5px);
        }
        .category-card .card-header {
            background-color: orange;
            color: white;
            font-weight: bold;
        }
        footer {
            background-color: orange;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        .banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
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
    

    <!-- Banner principal -->
    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.sipiapa.org/adjuntos/185/imagenes/001/819/0001819726.jpg" class="d-block w-100" alt="Promoción 1">
            </div>
            <div class="carousel-item">
                <img src="https://unired.edu.co/images/instituciones/UNAB/2017/junio/unab.jpg" class="d-block w-100" alt="Promoción 2">
            </div>
            <div class="carousel-item">
                <img src="https://unired.edu.co/images/instituciones/UNAB/2018/mayo/ranking-dinero.jpg" class="d-block w-100" alt="Promoción 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    

    <!-- Título -->
    <div class="container text-center my-4">
        <h1 class="text-orange">Categorías de Productos</h1>
    </div>

    <!-- Catálogo por categorías -->
    <div class="container">
        <div class="row">

            <!-- Categoría: Electrodomésticos -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Electrodomésticos</div>
                    <div class="card-body">
                        <p>Encuentra neveras, lavadoras, microondas y más.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

            <!-- Categoría: Limpieza -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Limpieza</div>
                    <div class="card-body">
                        <p>Productos de aseo para el hogar y la oficina.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

            <!-- Categoría: Tecnología -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Tecnología</div>
                    <div class="card-body">
                        <p>Celulares, portátiles, accesorios y más.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

            <!-- Categoría: Moda -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Moda</div>
                    <div class="card-body">
                        <p>Ropa, calzado y accesorios para toda la familia.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

            <!-- Categoría: Hogar -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Hogar</div>
                    <div class="card-body">
                        <p>Muebles, decoración y más para tu hogar.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

            <!-- Categoría: Alimentos -->
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">Alimentos</div>
                    <div class="card-body">
                        <p>Productos frescos y enlatados de alta calidad.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mi Tienda Online - Todos los derechos reservados</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Añadir color naranja al botón
        document.querySelectorAll('.btn-outline-orange').forEach(btn => {
            btn.style.color = 'orange';
            btn.style.borderColor = 'orange';
        });
        document.querySelectorAll('.btn-outline-orange').forEach(btn => {
            btn.addEventListener('mouseover', () => {
                btn.style.backgroundColor = 'orange';
                btn.style.color = 'white';
            });
            btn.addEventListener('mouseout', () => {
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'orange';
            });
        });
    </script>
</body>

</html>
