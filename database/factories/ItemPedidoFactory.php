<?php

namespace Database\Factories;

use App\Models\ItemPedido;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemPedido>
 */
class ItemPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ItemPedido::class;

    public function definition(): array
    {
        // Obtem os id's 
        $pedidos = Pedido::pluck('id');
        $produtos = Produto::pluck('id');

        return [
            // Gera os valores da tabela
            'pedido_id' => fake()->randomElement($pedidos),
            'produto_id' => fake()->randomElement($produtos),
            'quantidade' => fake()->numberBetween(1, 10),
        ];
    }
}