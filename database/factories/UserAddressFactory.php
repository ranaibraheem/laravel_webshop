<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street' => $this->faker->streetAddress(),
            'house_number' => $this->faker->numberBetween(0,100),
            'postal_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            ];
    }
}
