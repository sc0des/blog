<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->sentence(),
            'content' => fake()->realText(),
            'posted_at' => fake()->dateTimeBetween('-1 week', 'now'),
            'author_id' => fake()->numberBetween(1, 10),
            'tag_id' => fake()->numberBetween(1, 10),
        ];
    }
}
