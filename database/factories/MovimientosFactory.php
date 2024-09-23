<?php

namespace Database\Factories;

use App\Models\Movimientos;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movimientos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->word,
        'hora_entrada' => $this->faker->word,
        'hora_salida' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
