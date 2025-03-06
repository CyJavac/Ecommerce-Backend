<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//web.php deberia ser así normalmente 

Route::get('/', HomeController::class);

Route::prefix("products")->controller(ProductController::class)->group(function (){
    Route::get('/', "index");
    Route::get('/create', "create");
    Route::get('/{name}', "show");
});

//Route::get('/products/{name}/{category}', [ProductController::class, "showCat"]);