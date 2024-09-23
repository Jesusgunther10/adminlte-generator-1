<?php

namespace Database\Factories;

use App\Models\Estacionamiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstacionamientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estacionamiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->word,
        'id_bloque' => $this->faker->word,
        'id_categoria' => $this->faker->word,
        'estado' => $this->faker->word,
        'id_tarifas' => $this->faker->word,
        'hora_entrada' => $this->faker->word,
        'hora_salida' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
