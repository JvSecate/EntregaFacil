<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItemPedidoController;
use App\Models\Restaurante;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste' , [TesteController::class,'index']);
Route::resource('usuario', UsuarioController::class, );
Route::resource('restaurante', RestauranteController::class, );
Route::resource('produto', ProdutoController::class, );
Route::resource('pedido', PedidoController::class, );
Route::resource('item_pedidos', ItemPedidoController::class, );
Route::get('/usuario/{id}' , [UsuarioController::class,'show']);
Route::get('/restaurante/{id}' , [RestauranteController::class,'show']);
Route::get('/produto/{id}' , [ProdutoController::class,'show']);
Route::get('/pedido/{id}' , [PedidoController::class,'show']);
Route::get('/item_pedidos/{id}' , [ItemPedidoController::class,'show']);