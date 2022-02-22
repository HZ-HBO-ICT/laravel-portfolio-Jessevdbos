<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->name,
            'test_name' => $this->faker->title,
            'lowest_passing_grade' => 5.5,
            'best_grade' => $this->faker->boolean(75) ? $this->faker->numberBetween(1, 10): null,
            'passed_at' => now()
        ];
    }
}
