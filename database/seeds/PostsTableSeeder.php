<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_post = new Post();

            $new_post->title = $faker->text(100);
            $new_post->description = $faker->paragraphs(2, true);
            $new_post->thumb = $faker->imageUrl(640, 480, 'animals', true);

            $new_post->save();
        }
    }
}
