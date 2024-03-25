<?php

namespace Database\Factories;

use App\Models\Produto;
use App\Models\Restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Obtem os id's
        $restaurantes = Restaurante::pluck('id');
        return [
            // Gera os valores da tabela
            'nome' => fake()->word(),
            'descricao' => fake()->paragraph(),
            'preco' => fake()->randomFloat(2, 1, 1000),
            'restaurante_id' => fake()->randomElement($restaurantes)
        ];  
    }
}
