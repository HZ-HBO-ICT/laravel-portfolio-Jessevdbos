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
//            'title' => $this->faker->text(10),
//            'excerpt' => $this->faker->text(20),
//            'body' => $this->faker->text(30),
        ];
    }
}
