<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cliente;
use App\Models\DatosFacturacion;

class DatosFacturacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DatosFacturacion::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'rut' => $this->faker->word(),
            'razon_social' => $this->faker->word(),
            'direccion' => $this->faker->word(),
            'pais' => $this->faker->word(),
            'comuna' => $this->faker->word(),
            'ciudad' => $this->faker->word(),
            'giro' => $this->faker->word(),
            'telefono_facturacion' => $this->faker->word(),
            'cliente_id' => Cliente::factory(),
        ];
    }
}
