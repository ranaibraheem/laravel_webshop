<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
            'user_id'       => \App\Models\User::inRandomOrder()->first()->id,
            'street'        => $this->faker->address(),
            'house_number'  => $this->faker->randomDigitNotNull(),
            'zip_code'      => $this->faker->postcode(),
            'city'          => $this->faker->city(),
            'country'       => $this->faker->country(),
        ];
    }
}
