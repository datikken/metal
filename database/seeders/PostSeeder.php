<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $tags = ['news', 'services', 'work'];
        $categories = Category::all();

        for ($i = 0; $i < 25; ++$i) {
            foreach ($categories as $cat) {
                Post::create([
                    'title' => $faker->name,
                    'content' => $faker->paragraph,
                    'tags' => [$tags[rand(0, 2)]],
                    'category_id' => $cat->id
                ]);
            }
        }
    }
}
