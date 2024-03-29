<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArmindFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'a_nombre' => $this->faker->name(),
            'a_paterno' => $this->faker->name(),
            'a_materno' => $this->faker->name(),
            'a_link' => $this->faker->url(),
        ];
    }
}
