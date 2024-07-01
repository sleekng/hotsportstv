<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('blog_posts')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'image' => $faker->imageUrl,
                'category' => $faker->word,
                'content' => $faker->paragraphs(3, true),
                'keywords' => implode(', ', $faker->words(5)),
                'status' => $faker->randomElement(['published', 'draft', 'trash']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
