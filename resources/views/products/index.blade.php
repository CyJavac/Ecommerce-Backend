@extends('layout.app')

@section('title')
    Lista de productos
@endsection

@section('content')
    <!-- Contenido Principal -->
    <div class="container content py-4">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <div class="row">

            @foreach ($listProducts as $product)
                <!-- Producto 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="{{  $product->url_image  }}" class="card-img-top"
                        alt="{{$product->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Categoría: {{$product->category_id}}</p>
                        <p class="card-text">Precio: ${{$product->price}}</p>
                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            @endforeach

            {{ $listProducts->links()}}

        </div>
    </div>
@endsection
