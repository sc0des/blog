<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'birth_date'=>fake()->dateTimeBetween('1990-01-01', '2012-12-31'),
            'country'=> fake()->country(),
            'user_id' => fake()->numberBetween(1, User::count()),
        ];
    }



}

