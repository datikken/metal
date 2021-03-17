<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; ++$i) {
            Category::create([
                'name' => $faker->name,
                'description' => $faker->email,
                'slug' => $faker->word,
            ]);
        }
    }
}
