<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            //choses an id randomly for post and user            
            'post_id'=> Post::all()->random()->id,
            'author_id' => User::all()->random()->id,
            'comment' => fake()->sentence(),           
            'commented_at' => fake()->dateTimeBetween('-1 week', 'now'),

        ];
    }
}
