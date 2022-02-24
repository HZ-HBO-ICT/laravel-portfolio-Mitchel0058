<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grade;

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
            'course_id' => Course::factory(),
            'test_name' => $this->faker->streetName,
            'lowest_passing_grade' => 5,
            'best_grade' => $this->faker->numberBetween(1, 10),
            'passed_at' => $this->faker->date
        ];
    }
}
