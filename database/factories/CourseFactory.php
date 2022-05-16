<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU_code' => $this->faker->randomDigitNotNull,
            'name' => $this->faker->name,
            'credits' => $this->faker->numberBetween(0, 10),
            'passed_at' => $this->faker->boolean(75) ? now(): null,
        ];
    }
}
