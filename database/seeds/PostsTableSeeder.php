<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);
        // 所有用户 ID 数组
        $user_ids = User::all()->pluck('id')->toArray();

        $posts = factory(Post::class)
            ->times(100)
            ->make()
            ->each(function ($post, $index) use ($user_ids, $faker) {
                $post->user_id = $faker->randomElement($user_ids);
            });

        Post::insert($posts->toArray());
    }
}
