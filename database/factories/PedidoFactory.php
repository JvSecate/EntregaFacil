<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Usuario;
use App\Models\Restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    protected $model = Pedido::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define os diferentes status
        $status = ['Pendente', 'Em andamento', 'Entregue', 'Cancelado'];

        // Obtem os id's
        $clientes = Usuario::where('tipo', 'cliente')->pluck('id');
        $entregadores = Usuario::where('tipo', 'entregador')->pluck('id');
        $restaurantes = Restaurante::pluck('id');

        return [
            // Gera os valores da tabela
            'cliente_id' => fake()->randomElement($clientes),
            'entregador_id' => fake()->randomElement($entregadores),
            'restaurante_id' => fake()->randomElement($restaurantes),
            'status' => fake()->randomElement($status),
            'data_hora' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
