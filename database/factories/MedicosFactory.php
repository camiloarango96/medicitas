<?php

namespace Database\Factories;

use App\Models\medicos;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = medicos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName($gender = null),
            'apellido' => $this->faker->lastName(),
            'celular' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
            'sedes_id' => $this->faker->numberBetween(1,5)

        ];
    }
}
