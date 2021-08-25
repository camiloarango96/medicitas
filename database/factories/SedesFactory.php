<?php

namespace Database\Factories;

use App\Models\sedes;
use Illuminate\Database\Eloquent\Factories\Factory;

class SedesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = sedes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'direccion' => $this->faker->streetAddress()
        ];
    }
}
