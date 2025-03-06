@extends('layout.app')

@section('title')
    Lista de productos
@endsection

@section('content')
    <!-- Contenido Principal -->
    <div class="container content py-4">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <div class="row">

            <!-- Producto 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Televisor" class="card-img-top"
                        alt="Televisor">
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
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Laptop" class="card-img-top"
                        alt="Laptop Gamer">
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
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Detergente" class="card-img-top"
                        alt="Detergente">
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
                    <img src="https://dummyimage.com/300x150/cccccc/000000&text=Zapatos" class="card-img-top"
                        alt="Zapatos Deportivos">
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
@endsection
