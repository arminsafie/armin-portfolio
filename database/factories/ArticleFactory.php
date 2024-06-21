<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'creator'=>fake()->words(3,true),
            'content'=>fake()->paragraph(5,true),
            'imgUrl'=>fake()->imageUrl(640, 480, 'animals', true),
            'view'=>fake()->randomNumber(3,false),
            'publish'=>fake()->boolean(),
        ];
    }
}
