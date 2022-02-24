<?php

namespace Database\Seeders;

use App\Models\Course;
use Database\Factories\CourseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            FaqSeeder::class
            CourseSeeder::class,
            GradeSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
