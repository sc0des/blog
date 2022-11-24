<?php

namespace Database\Factories;

use App\Models\Post;
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
            'posted_at' => fake()->dateTimeBetween('-3 week', 'now'),
            'author_id' => fake()->numberBetween(1, 10),
            'tag_id' => fake()->numberBetween(1, 10),
        ];
    }

    // Add images for posts

    public function configure()
    {
        return $this->afterCreating(function (Post $post) {
            $url = 'https://source.unsplash.com/random/1200x800';
            $post
                ->addMediaFromUrl($url)
                ->toMediaCollection();
        });
    }
}
