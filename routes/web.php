<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//web.php deberia ser así normalmente 

Route::get('/', [HomeController::class, "welcome"]);

Route::prefix("products")->controller(ProductController::class)->group(function (){
    Route::get('/', "index");
    Route::get('/create', "create");
    Route::get('/{id}', "show");
});

//Route::get('/products/{name}/{category}', [ProductController::class, "showCat"]);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
