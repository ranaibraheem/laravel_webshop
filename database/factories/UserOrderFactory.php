<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserOrder>
 */
class UserOrderFactory extends Factory
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
            // 'payment_id'    => \App\Models\Payment::inRandomOrder()->first()->id,
            'total'         => $this->faker->numberBetween(0,100),        
        ];
    }
}
