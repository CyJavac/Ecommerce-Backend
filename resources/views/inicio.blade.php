@extends('layouts.app')

@section('title', 'Inicio - Mi Tienda Online')

@section('content')

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
        <!-- Aquí van tus tarjetas de categorías como antes -->
        @foreach(['Electrodomésticos', 'Limpieza', 'Tecnología', 'Moda', 'Hogar', 'Alimentos'] as $categoria)
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <div class="card-header">{{ $categoria }}</div>
                    <div class="card-body">
                        <p>Descripción breve de {{ strtolower($categoria) }}.</p>
                        <a href="#" class="btn btn-outline-orange btn-block">Ver Productos</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@push('styles')
<style>
    body { background-color: #fff; color: #333; }
    .navbar { background-color: orange; }
    .navbar-brand, .nav-link { color: white !important; }
    .category-card { border: 1px solid orange; transition: transform 0.2s; }
    .category-card:hover { transform: translateY(-5px); }
    .category-card .card-header { background-color: orange; color: white; font-weight: bold; }
    footer { background-color: orange; color: white; text-align: center; padding: 10px 0; margin-top: 20px; }
    .banner img { width: 100%; height: auto; object-fit: cover; }
</style>
@endpush

@push('scripts')
<script>
    document.querySelectorAll('.btn-outline-orange').forEach(btn => {
        btn.style.color = 'orange';
        btn.style.borderColor = 'orange';
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
@endpush
