<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/products', function () {
    echo "Listado de todos los productos";
});

Route::get('/products/create', function () {
    echo "Formulario para crear un producto";
});

Route::get('/products/{name}', function ($name) {
    echo "Producto: $name";
});

Route::get('/products/{name}/{category}', function ($name, $category) {
    echo "Producto: $name, y tiene una categoria como $category";
});
