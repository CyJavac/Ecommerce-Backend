<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view("products.index");  //Retornar una lista de productos Nombre, categoria, precio
        //echo "Listado de todos los productos";
    }
    public function create(){
        return view("products.create"); //Retorna el formulario para crear los productos
        //echo "Formulario para crear un producto";
    }
    public function show($name){
        return view("products.show");//Retorna el detalle de un producto
        //echo "Producto: $name";
    }
    public function showCat($name, $category){
        echo "Producto: $name, y tiene una categoria como $category";
    }
}