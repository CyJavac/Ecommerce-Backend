<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function idex(){
        echo "Listado de todos los productos";
    }
    public function create(){
        echo "Formulario para crear un producto";
    }
    public function show($name){
        echo "Producto: $name";
    }
}