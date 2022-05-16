<?php

namespace Database\Factories;

use Database\Seeders\ArticleSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Scalar\String_;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'excerpt' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(5),
        ];
    }
}
