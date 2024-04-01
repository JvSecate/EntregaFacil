<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ItemPedidoController;
use App\Models\ItemPedido;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Restaurante;
use App\Models\Usuario;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste' , [TesteController::class,'index']);

# Index
Route::resource('usuario', UsuarioController::class, );
Route::resource('restaurante', RestauranteController::class, );
Route::resource('produto', ProdutoController::class, );
Route::resource('pedido', PedidoController::class, );
Route::resource('item_pedidos', ItemPedidoController::class, );

# Show
Route::get('/usuario/{id}' , [UsuarioController::class,'show']);
Route::get('/restaurante/{id}' , [RestauranteController::class,'show']);
Route::get('/produto/{id}' , [ProdutoController::class,'show']);
Route::get('/pedido/{id}' , [PedidoController::class,'show']);
Route::get('/item_pedidos/{id}' , [ItemPedidoController::class,'show']);

# Edit
Route::get('/usuario/{id}/editar' , [UsuarioController::class,'edit']);
Route::get('/restaurante/{id}/editar' , [RestauranteController::class,'edit']);
Route::get('/produto/{id}/editar' , [ProdutoController::class,'edit']);
Route::get('/pedido/{id}/editar' , [PedidoController::class,'edit']);
Route::get('/item_pedidos/{id}/editar' , [ItemPedidoController::class,'edit']);

# Update
Route::put('/usuario/{id}' , [UsuarioController::class,'update']);
Route::put('/restaurante/{id}' , [RestauranteController::class,'update']);
Route::put('/produto/{id}' , [ProdutoController::class,'update']);
Route::put('/pedido/{id}' , [PedidoController::class,'update']);
Route::put('/item_pedidos/{id}' , [ItemPedidoController::class,'update']);
