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
                    <img src="{{ $product->url_image}}" alt="Imagen del Producto" class="producto-imagen">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{$product->name}}</h3>
                        <p class="card-text"><strong>Categoría:</strong> {{$product->category_id}}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{$product->price}} COP</p>
                        <p class="card-text"><strong>Descripción:</strong> {{$product->description}}</p>
                        <button class="btn btn-success">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
