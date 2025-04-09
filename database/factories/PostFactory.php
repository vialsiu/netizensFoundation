<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->paragraph(2),
            'content' => $this->faker->paragraphs(5, true),
            'image' => $this->faker->imageUrl(640, 480, 'business', true),
            'category_id' => $this->faker->numberBetween(1, 6),
            'author' => $this->faker->numberBetween(1, 3),
        ];
    }
}
