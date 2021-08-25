<?php

namespace Database\Factories;

use App\Models\citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_cita' => $this->faker->date(),
            'user_id' => $this->faker->numberBetween(0,10),
            'medicos_id' => $this->faker->numberBetween(0,10)
        ];
    }
}
