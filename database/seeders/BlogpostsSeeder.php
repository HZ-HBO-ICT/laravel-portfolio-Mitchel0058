<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Nette\Utils\Random;
use Ramsey\Uuid\Generator\RandomBytesGenerator;

class BlogpostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i += 1) {
            \App\Models\Blogposts::factory()
                ->count(1)
                ->create([
                    'main_text' => \Str::random(random_int(10, 200)),
                    'link' => \Str::random(10),
                    'date_added' => now()
                ]);
        }
    }
}
