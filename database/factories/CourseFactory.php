<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Course;

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
            'CU_code' => $this->faker->numberBetween(1000, 40000),
            'name' => $this->faker->jobTitle,
            'credits' => $this->faker->randomDigitNotNull,
        ];
    }
}
