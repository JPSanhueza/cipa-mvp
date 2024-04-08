<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cliente;
use App\Models\EstadoPropuesta;
use App\Models\Propuesta;

class PropuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propuesta::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::factory(),
            'nombre' => $this->faker->word(),
            'fecha' => $this->faker->date(),
            'resultados' => $this->faker->word(),
            'item_id' => $this->faker->randomNumber(),
            'estado_propuesta_id' => EstadoPropuesta::factory(),
        ];
    }
}
