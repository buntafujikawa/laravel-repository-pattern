<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\User::class, 10)->create()->each(function ($user) {
            factory(\App\Entities\Post::class, 3)->create([
                'user_id' => $user->id,
                'category_id' => rand(1, 10)
            ])->each(function ($post) {
                factory(\App\Entities\Comment::class, 2)->create([
                    'user_id' => rand(1, 10),
                    'post_id' => $post->id,
                ]);
            });
        });
    }
}
