<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName($gender = 'male'|'female'),
            'lastName' => $this->faker->lastName(),
            'agreement' => rand(0, 1),
        ];
    }
}
