<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamar>
 */
class KamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->image(null, 640, 480),
            'kamar' => $this->faker->sentence(mt_rand(2, 8)),
            'jumlah' => $this->faker->randomNumber(5, false),
            'biaya' => $this->faker->randomNumber(5, false),
            // 'role_id' => $this->faker->sentence(mt_rand(2, 4))
            // 'body' => '</p>'. implode('</p>/<p>', $this->faker->paragraphs(mt_rand(5, 10))) .'</p>',
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            // 'user_id' => mt_rand(1, 3),
            // 'category_id' => mt_rand(1, 2)
        ];
    }
}
