<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//web.php deberia ser así normalmente 

Route::get('/', HomeController::class);

Route::get('/products', [ProductController::class, "index"]);

Route::get('/products/create', [ProductController::class, "create"]);

Route::get('/products/{name}', [ProductController::class, "show"]);

Route::get('/products/{name}/{category}', [ProductController::class, "showCat"]);
