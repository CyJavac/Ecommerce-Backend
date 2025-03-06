@extends('layout.app')

@section('title')
    Detalles del producto
@endsection

@section('content')
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
                        <p class="card-text"><strong>Descripción:</strong> Este es un producto de ejemplo con una
                            descripción detallada para mostrar cómo se vería en esta página.</p>
                        <button class="btn btn-success">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
