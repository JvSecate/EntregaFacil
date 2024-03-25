<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        //Chamas as funções Seed (NÃO ALTERAR A ORDEM)
        $this->call([
            UsuarioSeeder::class,
            RestauranteSeeder::class,
            ProdutoSeeder::class,
            PedidoSeeder::class,
            ItemPedidoSeeder::class,
        ]);
    }
}