<?php

namespace Database\Factories;

use App\Models\eps;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eps::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'asesor' => $this->faker->name(),
            'correo_asesor' => $this->faker->email
        ];
    }
}
