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
        $tags = ['news', 'services', 'work'];

        for ($i = 0; $i < 10; ++$i) {
            Category::create([
                'name' => $tags[rand(0, 2)]
            ]);
        }
    }
}
