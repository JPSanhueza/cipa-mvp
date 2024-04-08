<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Actividad;
use App\Models\Item;

class ActividadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actividad::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'activo_fijo' => $this->faker->word(),
            'rrhh' => $this->faker->word(),
            'hrs_unidades' => $this->faker->numberBetween(-10000, 10000),
            'sub_total_uf' => $this->faker->numberBetween(-10000, 10000),
            'sub_total_pesos' => $this->faker->numberBetween(-10000, 10000),
            'item_id' => Item::factory(),
        ];
    }
}
