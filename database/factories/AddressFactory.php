<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'region' => $this->faker->state(),
            'locality' => $this->faker->city(),
            'street' => $this->faker->streetName(),
            'houseNumber' => rand(1, 999),
            'postcode' => $this->faker->postcode(),
            'user_id' => User::getRandomUserId()->id,
        ];
    }
}
