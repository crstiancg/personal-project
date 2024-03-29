<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->name(),
            'apellidos'=>$this->faker->name(),
            'bibliografia'=>$this->faker->text(),
        ];
    }
}
